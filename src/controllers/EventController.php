<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Event.php';
require_once __DIR__ . '/../repository/EventRepository.php';

class EventController extends AppController{
    private EventRepository $eventRepository;

    public function __construct()
    {
        parent::__construct();
        $this->eventRepository = new EventRepository();
    }
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];

    public function events()
    {
        $events = $this->eventRepository->getEvents();
        $this->render('events', ['events' => $events]);
    }
    public function myEvents()
    {
        $events = $this->eventRepository->getMyEvents();
        $this->render('events', ['events' => $events]);
    }
    public function addEvent()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $event = new Event($_POST['title'], $_POST['description'], $_FILES['file']['name'], $_POST['date'], $_POST['location']);
            $this->eventRepository->addEvent($event);

            return $this->render('events', ['messages' => $this->messages, "event"=>$event]);
        }
        return $this->render('add-Event', ['messages' => $this->messages]);
    }
    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->eventRepository->getEventByTitle($decoded['search']));
        }
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }

    public function like(int $id)
    {
        require('public/views/sessionValidator.php');
        $this->eventRepository->like($id);
        http_response_code(200);
    }

    public function dislike(int $id)
    {
        require('public/views/sessionValidator.php');
        $this->eventRepository->dislike($id);
        http_response_code(200);
    }

    public function uncertain(int $id)
    {
        require('public/views/sessionValidator.php');
        $this->eventRepository->uncertain($id);
        http_response_code(200);
    }

    public function admin()
    {
        $this->render('admin');
    }

    public function deleteEvent()
    {
        $this->eventRepository->deleteEvent($_POST['id']);
        $this->admin();
    }





}

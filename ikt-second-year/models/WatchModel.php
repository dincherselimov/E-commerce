<?php

/**
 * Class WatchModel
 */
class WatchModel extends BaseModel {


    /**
     * @var WatchesRepository
     */
    private  $watchRepo;

    public  function __construct() {
        $this->watchRepo = new WatchesRepository();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        return $this->watchRepo->create($data);
    }

    /**
     * @param $watch_id
     * @return mixed
     * show only one item
     */
    public function view($watch_id) {
        return $this->watchRepo->getById($watch_id);
    }

    /**
     * @return array|mixed
     */
    public function listAll()
    {
        return $this->watchRepo->getAll();
    }

    /**
     * @param $topic
     * @return mixed
     */
    public function search($topic){
        return $this->watchRepo->getAllByTopic($topic);
    }

    /**
     * @param $data
     * @return bool|mixed
     */
    public function update($data)
    {
        return $this->watchRepo->update($data);
    }

    /**
     * @param $watch_id
     * @return bool|mixed
     */
    public function delete($watch_id)
    {
        return $this->watchRepo->delete($watch_id);
    }
}
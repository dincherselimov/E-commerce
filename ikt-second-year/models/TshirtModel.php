<?php


class TshirtModel extends BaseModel {

    /**
     * @var TshirtsRepository
     */
    private   $tshirtRepo;

    public  function __construct() {
        $this-> tshirtRepo = new TshirtsRepository();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        return $this->tshirtRepo->create($data);
    }

    /**
     * @param $tshirt_id
     * @return mixed
     * show only one item
     */
    public function view($tshirt_id) {
        return $this->tshirtRepo->getById($tshirt_id);
    }

    /**
     * @return array|mixed
     */
    public function listAll()
    {
        return $this->tshirtRepo->getAll();
    }

    /**
     * @param $topic
     * @return mixed
     */
    public function search($topic){
        return $this->tshirtRepo->getAllByTopic($topic);
    }


    /**
     * @param $data
     * @return bool|mixed
     */
    public function update($data)
    {
        return $this->tshirtRepo->update($data);
    }

    /**
     * @param $tshirt_id
     * @return bool|mixed
     */
    public function delete($tshirt_id)
    {
        return $this->tshirtRepo->delete($tshirt_id);
    }


}
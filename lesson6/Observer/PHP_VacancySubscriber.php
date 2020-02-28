<?php


class PHP_VacancySubscriber implements IVacancySubscriber
{
    private $jobSeekers = [];
    private $vacanсy = [];
    
    public function __construct()
    {
        echo 'Сайт HandHunter.gb.' . PHP_EOL;
        echo 'Подписывайтесь на php-вакансии' . PHP_EOL;
    }
    
    public function addJobSeeker(JobSeeker $jobSeeker)
    {
        $this->jobSeekers[] = $jobSeeker;
        echo "{$jobSeeker->name} подписался" . PHP_EOL;
    }
    
    public function removeJobSeeker(JobSeeker $jobSeeker)
    {
        foreach ($this->jobSeekers as $key => $value) {
            if ($value === $jobSeeker) {
                array_splice($this->jobSeekers, $key, 1);
                break;
        	}
        }
        echo "{$jobSeeker->name} отписался" . PHP_EOL;
    }
    
    public function notify()
    {
        foreach ($this->jobSeekers as $jobSeeker) {
            echo "Сообщение {$jobSeeker->name} о вакансии" . PHP_EOL;
        }
    }
    
    public function getVacanсy()
	{
		return $this->vacanсy;
	}

	public function setVacancy($vacanсy)
	{
		$this->vacanсy = $vacanсy;
		$this->notify();
	}
    
}
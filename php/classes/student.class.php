<?php

declare(strict_types = 1);

include '../interfaces/course.interface.php';

class Student {

	// Personal details
	private string $name;
	private string $dateOfBirth;
	private string $fatherName;
	private string $motherName;
	private string $gurdianName;

	// Contact info
	private string $email;
	private string $phoneNumber;
	private string $address;

	// Academic info
	private string $prevAcademicLevel;
	private string $prevAcademicScore;

	// Course info	
	private Course $course;

	// Constructor
	public function __construct(
		string $name,
		string $dateOfBirth, 
		string $fatherName,
		string $motherName,
		string $guardianName, 
		string $email,
		string $phoneNumber,
		string $address,
		string $prevAcademicLevel,
		string $prevAcademicScore,
		Course $course
	) {
		$this->name = $name;
		$this->dateOfBirth = $dateOfBirth;
		$this->fatherName = $fatherName;
		$this->motherName = $motherName;
		$this->gurdianName = $guardianName;
		$this->email = $email;
		$this->phoneNumber = $phoneNumber;
		$this->address = $address;
		$this->prevAcademicLevel = $prevAcademicLevel;
		$this->prevAcademicScore = $prevAcademicScore;
		$this->course = $course;
	}

	// Setter functions

	public function setName(string $name) {
		$this->name = $name;
	}

	public function setDateOfBirth(string $dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
	}

	public function setFatherName(string $fatherName) {
		$this->fatherName = $fatherName;
	}

	public function setMotherName(string $motherName) {
		$this->motherName = $motherName;
	}

	public function setGuardianName(string $guardianName) {
		$this->gurdianName = $guardianName;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function setPhoneNumber(string $phoneNumber) {
		$this->phoneNumber = $phoneNumber;
	}

	public function setAddress(string $address) {
		$this->address = $address;
	}

	public function setPrevAcademicDetails(string $prevAcademicLevel, string $prevAcademicScore) {
		$this->prevAcademicLevel = $prevAcademicLevel;
		$this->prevAcademicScore = $prevAcademicScore;
	}

	public function setCourse(Course $course) {
		$this->course = $course;
	}

	// Getter functions

	public function getName() {
		return $this->name;
	}

	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	public function getFatherName() {
		return $this->fatherName;
	}

	public function getMotherName() {
		return $this->motherName;
	}

	public function getGuardianName() {
		return $this->gurdianName;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	public function getAddress() {
		return $this->address;
	}

	public function getprevacademicLevel() {
		return $this->prevacademicLevel;
	}

	public function getprevacademicScore() {
		return $this->prevacademicScore;
	}

	public function getCourse() {
		return $this->course;
	}
	
}

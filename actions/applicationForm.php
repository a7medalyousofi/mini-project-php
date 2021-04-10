<?php

include "../database/DbConnection.php";

if (isset($_POST['submitBtn'])) {

    $collegeCode = trim($_POST['collegeCode']);
    $rollNumber = trim($_POST['rollNumber']);
    $studentName = trim($_POST['studentName']);
    $fatherName = trim($_POST['fatherName']);
    $motherName = trim($_POST['motherName']);

    // $image = trim($_POST['image']);
    $course = trim($_POST['course']);
    $inputCombination = @trim($_POST['inputCombination']);

    $gender = trim($_POST['gender']);
    $socialState = trim($_POST['socialState']);
    $addressOne = trim($_POST['address_one']);
    $addressTwo = trim($_POST['address_two']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $state = trim($_POST['state']);
    $pinCode = trim($_POST['pinCode']);
    $email = trim($_POST['email']);
    $mobileNo = trim($_POST['mobileNo']);
    $dob = trim($_POST['dob']);
    $yearofAppearing = trim($_POST['yearofAppearing']);
    $semofAppearing = trim($_POST['semofAppearing']);
    $appearingAs = trim($_POST['appearingAs']);
    $theoryOne = trim($_POST['theoryOne']);
    $theoryTwo = trim($_POST['theoryTwo']);
    $theoryThree = trim($_POST['theoryThree']);
    $theoryFour = trim($_POST['theoryFour']);
    $theoryFive = trim($_POST['theoryFive']);
    $theorySix = trim($_POST['theorySix']);
    $practicalOne = trim($_POST['practicalOne']);
    $practicalTwo = trim($_POST['practicalTwo']);
    $practicalThree = trim($_POST['practicalThree']);
    $practicalFour = trim($_POST['practicalFour']);
    $practicalFive = trim($_POST['practicalFive']);
    $practicalSix = trim($_POST['practicalSix']);

    //toUpperCase for the other check functionality in future
    $rollNumber1 = strtoupper($rollNumber);
    $year = strtoupper($yearofAppearing);
    $semester = strtoupper($semofAppearing);
    $appearingAs1 = strtoupper($appearingAs);

    //check whether this student details is available in students table or not
    $check = $conn->prepare("SELECT id FROM students WHERE lower(rollNumber) =:rno AND mobileNumber =:mno");
    $check->bindParam(":rno", $rollNumber);
    $check->bindParam(":mno", $mobileNo);
    try {
        $check->execute();
        if ($check && $check -> rowCount() > 0) {

            //check for already registeration is done or not (by rollNumber, year, semester, appearingAs (regular or etc))
            $check1 = $conn->prepare("SELECT id FROM registrationForms WHERE UPPER(rollNumber) =:rno AND UPPER(year) =:yr AND
            UPPER(semester) =:sem AND UPPER(appearingAs) =:apas order by id LIMIT 1");
            $check1->bindParam(":rno", $rollNumber1);
            $check1->bindParam(":yr", $year);
            $check1->bindParam(":sem", $semester);
            $check1->bindParam(":apas", $appearingAs1);
            try {
                $check1->execute();
                if ($check1 && $check1 -> rowCount() > 0) {
                    header("Location:../success.php?success=Details already submitted!");
                }
                else {
                    //new registration 
                    $query = $conn->prepare("INSERT INTO registrationForms (
                        collegeCode, rollNumber, name, fatherName, motherName, gender, socialState, houseNumber, street, city,
                        state, zip, email, mobileNumber, dob, year, semester, appearingAs, theory1, theory2, theory3, 
                        theory4, theory5, theory6, practical1, practical2, practical3, practical4, practical5, practical6,
                        branch
                    )
                    VALUES (
                        :code, :rno, :name, :fn, :mname, :g, :ss, :hn, :str, :ct,
                        :st, :z, :e, :mn, :dob, :yr, :sem, :apas, :th1, :th2, 
                        :th3, :th4, :th5, :th6, :pr1, :pr2, :pr3, :pr4, :pr5, :pr6,
                        :bid
                    )");
                    $query->bindParam(":code", $collegeCode);
                    $query->bindParam(":rno", $rollNumber1);
                    $query->bindParam(":name", $studentName);
                    $query->bindParam(":fn", $fatherName);
                    $query->bindParam(":mname", $motherName);
                    $query->bindParam(":g", $gender);
                    $query->bindParam(":ss", $socialState);
                    $query->bindParam(":hn", $addressOne);
                    $query->bindParam(":str", $addressTwo);
                    $query->bindParam(":ct", $city);
                    $query->bindParam(":st", $state);
                    $query->bindParam(":z", $pinCode);
                    $query->bindParam(":e", $email);
                    $query->bindParam(":mn", $mobileNo);
                    $query->bindParam(":dob", $dob);
                    $query->bindParam(":yr", $year);
                    $query->bindParam(":sem", $semester);
                    $query->bindParam(":apas", $appearingAs1);
                    $query->bindParam(":th1", $theoryOne);
                    $query->bindParam(":th2", $theoryTwo);
                    $query->bindParam(":th3", $theoryThree);
                    $query->bindParam(":th4", $theoryFour);
                    $query->bindParam(":th5", $theoryFive);
                    $query->bindParam(":th6", $theorySix);
                    $query->bindParam(":pr1", $practicalOne);
                    $query->bindParam(":pr2", $practicalTwo);
                    $query->bindParam(":pr3", $practicalThree);
                    $query->bindParam(":pr4", $practicalFour);
                    $query->bindParam(":pr5", $practicalFive);
                    $query->bindParam(":pr6", $practicalSix);
                    $query->bindParam(":bid", $inputCombination);
                    try {
                        $query->execute();
                        if ($query) {
                            header("Location:../success.php?success=Details submitted Successfully");
                        } else {
                            header("Location:../error.php?error=Try again Something Went Wrong");
                        }
                    } catch (Exception $e) {
                        header("Location:../error.php?error=<?php echo $e->getMessage(); ?>");
                    }
                }
            }
            catch(Exception $e1) {
                header("Location:../error.php?error=<?php echo $e->getMessage(); ?>");
            }
        }
        else {
            header("Location:../error.php?error=Your details are not in our record. Please contact to the college admin.");
        }
    } catch (Exception $e) {
        header("Location:../error.php?error=<?php echo $e->getMessage(); ?>");
    }
} else {
    header("Location:../index.php");
}

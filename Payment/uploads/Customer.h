#include <iostream>
#include "User.h"
#include "Vehicle.h"
#include"Feedback.h"
#include <cstring>
#define SIZE1 1
#define SIZE2 1

using namespace std;
class Customer : public User
{
private:
	int cusID;
  Vehicle *veh[SIZE1]; // composition relationship
  Feedback *fedbk[SIZE2]; // aggregation relationship

public:
  Customer();
	Customer(int pCusID, string p_regNo, string p_manufac, string p_model, int p_year, string p_color);
  int getCID();
	void registerInsurance();
	void renewInsurance();
	void requestClaim();
  void displayVehicleDetails();
  void addFeedback(Feedback *fed1);
  void displayCustomer();
	~Customer();
}; 



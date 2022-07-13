#include<cstring>
#include<iostream>
using namespace std;

class Claim {

  private:
   int claimID;
   string description;
   string date;
    

  public:
    Claim();
    Claim(int id,string dat,string desc);
    void setClaimID();
    void displayClaimDetails();
    ~Claim();//destructor
};


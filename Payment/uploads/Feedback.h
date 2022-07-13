//IT21119644

#include <iostream>
#include <cstring>
#ifndef FEEDBACK_H
#define FEEDBACK_H
using namespace std;

class Feedback{
private:
  int fedID;
  string fedDesc;
  int rating;
  
public:
  Feedback();
  Feedback(int p_fedID, string p_desc);
  void setRating(int p_rating);
  void displayFeedbackDetails();
  int getRating();
  ~Feedback();
};

#endif
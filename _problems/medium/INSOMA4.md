---
languages_supported:
    - NA
title: INSOMA4
category: NA
old_version: true
problem_code: INSOMA4
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

In the hidden country of Lapatrecta, an age old custom was followed to ensure that no outsider ever entered their country undetected. The security measure, though simple, was an effective one. Every person born in Lapatrecta had the initials of all his forefathers included in front of his name. Every once in a while, certain families became very famous and the initials of their ancestors were dropped from the names of all their descendants. Thus, there existed a nice homogeneity in the names of the people of Lapatrecta.

Now, a royal ball was organized at the behest of the Queen of Lapatrecta and all citizens were cordially invited to the event. The ball was being held to chop off the initials of the ancestors of the most distinguished family of the country. The Queen set the following 2 criteria for determining the most distinguished family from amongst the invitees:

1\. The family must have more than 1 member living.
2\. The length of the ancestor list of the family must be as long as possible.

For example:

For 3 people:

APJQ Ravi

APJRS Rahul

PJQ Bharat

The following observations hold:

**APJQ Ravi** was of the same family as **APJ Rahul** but **PJQ Bharat** was not of the same family.

The length of the ancestor list for Ravi and Rahul was 3 whereas Bharat has an ancestor length of 0 as there is no other member of his family living. However, if there existed a person named PJ Varun, Bharat and Varun would both have an ancestor list length of 2.

As a member of the Royal Court of Lapatrecta, you have been entrusted the task of determining the length of the ancestor list that will be chopped off by the Queen. You will be provided data in the following format:

### Input

Line 1: N – The number of people coming to the ball

Line 2-N+1: The initials list of all the people coming to the ball. No initials list is longer than 100 characters.

### Output

Line 1: The length of the longest ancestor list.

### Example

<pre>
<b>Input:</b>
3
APJQ
APJRS
PJQ

<b>Output:</b>
3 
</pre>
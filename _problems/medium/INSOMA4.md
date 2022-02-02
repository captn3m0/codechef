---
{"languages_supported":{"0":"NA"},"title":"INSOMA4","category":"NA","old_version":true,"problem_code":"INSOMA4","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>In the hidden country of Lapatrecta, an age old custom was followed to ensure that no outsider ever entered their country undetected. The security measure, though simple, was an effective one. Every person born in Lapatrecta had the initials of all his forefathers included in front of his name. Every once in a while, certain families became very famous and the initials of their ancestors were dropped from the names of all their descendants. Thus, there existed a nice homogeneity in the names of the people of Lapatrecta.</p>
<p>
Now, a royal ball was organized at the behest of the Queen of Lapatrecta and all citizens were cordially invited to the event. The ball was being held to chop off the initials of the ancestors of the  most distinguished family of the country. The Queen set the following 2 criteria for determining the most distinguished family from amongst the invitees:
</p>
<p>
1.	The family must have more than 1 member living.<br />
2.	The length of the ancestor list of the family must be as long as possible.
</p>
<p>
For example:
</p>
<p>
For 3 people:<br/><br />
APJQ Ravi<br/><br />
APJRS Rahul<br/><br />
PJQ Bharat<br/>
</br/></br/></br/></br/></p>
<p>
The following observations hold:<br/><br />
<strong>APJQ Ravi</strong> was of the same family as <strong>APJ Rahul</strong> but <strong>PJQ Bharat</strong> was not of the same family.
</br/></p>
<p>
The length of the ancestor list for Ravi and Rahul was 3 whereas Bharat has an ancestor length of 0 as there is no other member of his family living.  However, if there existed a person named PJ Varun, Bharat and Varun would both have an ancestor list length of 2.
</p>
<p>
As a member of the Royal Court of Lapatrecta, you have been entrusted the task of determining the length of the ancestor list that will be chopped off by the Queen. You will be provided data in the following format:
</p>
<h3>Input</h3>
<p>Line 1: N &#8211; The number of people coming to the ball<br/><br />
Line 2-N+1: The initials list of all the people coming to the ball. No initials list is longer than 100 characters.
</br/></p>
<h3>Output</h3>
<p>Line 1: The length of the longest ancestor list.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
APJQ
APJRS
PJQ

<b>Output:</b>
3 
</pre>    
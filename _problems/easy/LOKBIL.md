---
{"languages_supported":{"0":"NA"},"title":"LOKBIL","category":"NA","old_version":true,"problem_code":"LOKBIL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>Anna Hazare is a well known social activist in India.
<br /><br />
On 5th April, 2011 he started "Lokpal Bill movement".
<br /><br />
Chef is very excited about this movement. He is thinking of contributing to it. He gathers his cook-herd and starts thinking about how our community can contribute to this.
<br /><br />
All of them are excited about this too, but no one could come up with any idea. Cooks were slightly disappointed with this and went to consult their friends.
<br /><br />
One of the geekiest friend gave them the idea of spreading knowledge through Facebook. But we do not want to spam people's wall. So our cook came up with the idea of dividing Facebook users into small friend groups and then identify the most popular friend in each group and post on his / her wall. They started dividing users into groups of friends and identifying the most popular amongst them.
<br /><br />
The notoriety of a friend is defined as the averaged distance from all the other friends in his / her group. This measure considers the friend himself, and the trivial distance of '0' that he / she has with himself / herself.
<br /><br />
The most popular friend in a group is the friend whose notoriety is least among all the friends in the group. 
<br /><br />
Distance between X and Y is defined as follows:<br />
Minimum number of profiles that X needs to visit for reaching Y's profile(Including Y's profile). X can open only those profiles which are in the friend list of the current opened profile. For Example:<br />
- Suppose A is friend of B.<br />
- B has two friends C and D.<br />
- E is a friend of D.
<br /><br />
Now, the distance between A and B is 1, A and C is 2, C and E is 3. 
<br /><br />
So, one of our smart cooks took the responsibility of identifying the most popular friend in each group and others will go to persuade them for posting.  This cheeky fellow knows that he can release his burden by giving this task as a long contest problem.
<br /><br />
Now, he is asking you to write a program to identify the most popular friend among all the friends in each group. Also, our smart cook wants to know the average distance of everyone from the most popular friend.

<h3>Input</h3>
<p>
Friends in a group are labelled with numbers to hide their Facebook identity. The first line of input contains the number of groups in which users are divided. First line of each group contains the number of friends that belong to that group. i<sup>th</sup> line of each group contains the space separated friend list of 'i'. You are assured that each friend's profile can be accessed by the profile of every other friend by following some sequence of profile visits.</p>

<h3>Output</h3>
<p>Your output contains the most popular friend name label along with the average distance (space separated) from all other friends (including himself / herself) in six digits of precision. There might be multiple most popular friend, in that case output the friend labelled with least number. 
</p>

<h3>Note:</h3>
<p>
Each person in a group have atleast one friend and he/she cannot be in his/her own friend list. <br />
Number of friends in a group cannot be more than 100.<br />
There are atmost 100 groups.
</p>
<h3>Example</h3>

<pre>
<b>Input:</b>
1
6
3
5
1 4
3 5 6
2 4 6
4 5

<b>Output:</b>
4 1.166667
</pre>    
---
{"languages_supported":{"0":"NA"},"title":"NDLVOTE","category":"NA","old_version":true,"problem_code":"NDLVOTE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">Did you ever hear about 'crossing the bridge noodle' ? Let me tell you that it's not some kind of bridge made of noodles. It's a dish, a kind of rice noodle soup. Mr.Ping makes the best noodle soup and his son Po is eagerly waiting for the user reviews in his father's blog. Users can vote with a (+) or a (-) and accordingly +1 or -1 is added to the total score respectively. Note that if a user votes multiple times, only his/her latest vote is counted towards the total score.
</p><p align="justify">Po opens the blog to see initial score of 0. To see the updated score without refreshing the page, he has to keep voting himself. After each of Po's clicks on (+) or (-), he can see the current total score, of course that considers Po's vote too. He is wondering how many users other than him could have possibly voted. Given the sequence of clicks made by Po and the total score displayed just after each of his clicks, can you tell him the minimum number of users that could have possibly voted at least once, other than Po.

<h3>Input</h3>
</p><p align="justify">There are multiple test cases ( at most 21 ). Each case starts with an integer <i>N</i> ( 1 &lt;= <i>N</i> &lt;= 1000 ), the number of Po's clicks. Sequence of <i>N</i> clicks follows, one on each line of the form <i>"vote score"</i> (without quotes, separated by a space), where <i>vote</i> is either a 'P' or a 'M', representing Plus(+) and Minus(-) respectively, the one clicked by Po and <i>score</i> is the score displayed after Po's click ( -1,000,000,000 &lt;= <i>score</i> &lt;= 1,000,000,000 ). The last case has <i>N</i> = 0 and should not be processed. Each case is followed by an empty line.

<h3>Output</h3>
</p><p align="justify">For each test case, output the minimum number of users that could have possibly voted at least once.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
P 1
P 2

2
P 2
M -2

0

<b>Output:</b>
1
1
</pre>
<br /><br />
<b>Explanation:</b><br /><br />
Case 1 :<br />
P 1 , Po voted (+) and score = 1 is possibly Po's vote itself.<br />
P 2 , Po again voted (+), but as only latest vote of a user is counted, Po contributed only +1 to the score, so possibly one more user voted with a (+). Remember that we have to find the number of users other than Po, so answer is 1<br />
<br />
Case 2 :<br />
P 2 , Po voted (+) and score = 2, possibly another user A also voted (+)<br />
M -2 , Po voted (-) and score = -2. Possibly the same user A also voted (-)<br />
So there can possibly be just one other user A<br />
<br /></p>    
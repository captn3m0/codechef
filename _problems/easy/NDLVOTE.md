---
languages_supported:
    - NA
title: NDLVOTE
category: NA
old_version: true
problem_code: NDLVOTE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you ever hear about 'crossing the bridge noodle' ? Let me tell you that it's not some kind of bridge made of noodles. It's a dish, a kind of rice noodle soup. Mr.Ping makes the best noodle soup and his son Po is eagerly waiting for the user reviews in his father's blog. Users can vote with a (+) or a (-) and accordingly +1 or -1 is added to the total score respectively. Note that if a user votes multiple times, only his/her latest vote is counted towards the total score.

Po opens the blog to see initial score of 0. To see the updated score without refreshing the page, he has to keep voting himself. After each of Po's clicks on (+) or (-), he can see the current total score, of course that considers Po's vote too. He is wondering how many users other than him could have possibly voted. Given the sequence of clicks made by Po and the total score displayed just after each of his clicks, can you tell him the minimum number of users that could have possibly voted at least once, other than Po.

### Input

There are multiple test cases ( at most 21 ). Each case starts with an integer *N* ( 1 &lt;= *N* &lt;= 1000 ), the number of Po's clicks. Sequence of *N* clicks follows, one on each line of the form *"vote score"* (without quotes, separated by a space), where *vote* is either a 'P' or a 'M', representing Plus(+) and Minus(-) respectively, the one clicked by Po and *score* is the score displayed after Po's click ( -1,000,000,000 &lt;= *score* &lt;= 1,000,000,000 ). The last case has *N* = 0 and should not be processed. Each case is followed by an empty line.

### Output

For each test case, output the minimum number of users that could have possibly voted at least once.

### Example

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


**Explanation:**

Case 1 :
P 1 , Po voted (+) and score = 1 is possibly Po's vote itself.
P 2 , Po again voted (+), but as only latest vote of a user is counted, Po contributed only +1 to the score, so possibly one more user voted with a (+). Remember that we have to find the number of users other than Po, so answer is 1

Case 2 :
P 2 , Po voted (+) and score = 2, possibly another user A also voted (+)
M -2 , Po voted (-) and score = -2. Possibly the same user A also voted (-)
So there can possibly be just one other user A

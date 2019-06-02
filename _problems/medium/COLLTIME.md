---
languages_supported:
    - NA
title: COLLTIME
category: NA
old_version: true
problem_code: COLLTIME
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Identical small balls are located on a straight line and can move along this line only. Each ball moves with a constant velocity, but velocities of different balls may be different. When two balls meet, a perfectly elastic collision occurs. It's a common-known physical fact that when two equal-mass physical bodies, say **A** and **B**, collide perfectly elastically, they swap their velocities. That is, **A**'s new velocity is **B**'s old velocity and **B**'s new velocity is **A**'s old velocity. Your task is to find the sum of all moments of time when collisions occur. If three or more balls collide at the same moment of time in the same place then the following will occur. Let the collision involves **k >= 3** balls then you should consider this collision as simultaneous **k\*(k-1)/2** collisions. It means that you should count the moment of time of this collision **k\*(k-1)/2** times in you answer. The new velocities of these balls after all collisions have occurred will be as follows: the **1**-st and **k**-th balls swap their velocities, **2**-nd and **k-1**-th balls swap their velocities and so on. Explicitly, for each **i** between **1** and **k/2** balls **i** and **k+1-i** swap their velocities. Here we enumerate balls in order they were on the line in the moment of time just before the collision.

### Input

The first line contains a single positive integer **T <= 10**, the number of test cases. **T** test cases follow. The first line of each test case contains the number of balls **N (1 <= N <= 50000)** . Each of the following **N** lines contains 2 space-separated integers - the starting coordinate and the velocity of corresponding ball. All start coordinates are not greater than **1000000** in absolute value and all velocities are not greater than **20** in absolute value. All start coordinates are different.

### Output

For each test case, output a single line containing number **S** - the sum of moments of time of all collisions. If there are infinitely many collisions then print **"INF"**. If there are only finitely many of them then it is guaranteed that the answer **S** is rational and you should print it in the form of a mixed number. That is if **S** is an integer then just print **S**, otherwise if it is less then one and equals to irreducible fraction **P/Q** then print "P/Q", otherwise print "A P/Q" where **A** is an integer part of **S** and **P/Q** is its fractional part in irreducible form. Note that for all fractions **P/Q** in output specifications we have **P < Q**.

### Example

<pre><b>Input:</b><br></br>3<br></br>2<br></br>-1 1<br></br>1 -1<br></br>2<br></br>0 1<br></br>1 -1<br></br>3<br></br>-1 1<br></br>2 -1<br></br>3 -5<br></br><br></br><b>Output:</b><br></br>1<br></br>1/2<br></br>2 5/12<br></br>
</pre>
### Explanation

In the third test case we have collisions in the following moments of time: 1/4, 2/3 and 3/2.

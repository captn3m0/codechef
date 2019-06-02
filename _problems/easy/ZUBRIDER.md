---
category_name: easy
problem_code: ZUBRIDER
problem_name: 'C - Club of Riders'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 6-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198945
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.At a shopping mall, every now and then, a naughty kid steals some chocolates from different chocolate shops and runs away. The guards in the shopping mall were unable to catch the kid as he has got a fast scooter.

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBRIDER/club_of_riders.png)Each scooter has a performance value. Also, this kind of scooter needs a skilled rider to perform well. The total performance of a rider is measured by the value of scooter performance multiplied by rider’s skill. A rider **X** can catch a rider **Y** only if **X**’s total performance is more than **Y**’s.The shopping mall manager has bought one scooter for each guard. However, as he has bought them from an wholesale offer, their performance values need not be the same.

Each guard gets a scooter and of course, a scooter can be assigned to only one guard. Now, the manager wants to assign the scooters to the guards. Everyday the guards are on duty in different places and that's why each has to be able to catch the kid and only then an assignment will be valid.

So in short, given the skill of that kid, his scooter’s performance value, each guard’s skill, and each scooter’s performance value, find out the number of valid assignments possible. In a valid assignment, each guard will be able to catch the kid. As the result can be very large, find the mod 109 + 7 of the result.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of each test case follows.
- The first line of each test case contains two integers **Kp** and **Ks** denoting the kid's performance value and his scooter's performance value respectively.
- The next line contains a single integer **N** denoting the number of guards.
- The third line contains **N** integers **G1, G2, G3, ... , GN** denoting the performance values of the guards.
- The fourth line of each test case contains **N** integers **S1, S2, S3, ... , SN** denoting the performance values of the scooters.
### Output

For each test case, print "Case i: ", and then the answer (mod 109 + 7), where i is the testcase number, 1-indexed.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, Kp, Ks, Gi, Si** ≤ 106

### Example


<pre><b>Input:</b>
2
2 3
3
3 1 3
7 3 4
2 3
3
3 1 3
2 7 4

<b>Output:</b>
Case 1: 2
Case 2: 0
</pre>
### Explanation

**Testcase 1:** The valid arrangements are the following:

- \[1st guard, 2nd scooter\], \[2nd guard, 1st scooter\], \[3rd guard, 3rd scooter\]
- \[1st guard, 3rd scooter\], \[2nd guard, 1st scooter\], \[3rd guard, 2nd scooter\]

**Testcase 2:** There is no valid arrangement.

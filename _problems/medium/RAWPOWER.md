---
category_name: medium
problem_code: RAWPOWER
problem_name: 'K - Raw Power'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: architk
problem_tester: null
date_added: 22-12-2017
tags:
    - architk
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The University of Geo Tech, Riga has a new doctoral student on the block who calls himself Raw Power. He has **N** meetings lined up today and wants to avoid them all.

The ith meeting takes place from time units **si** to **ti**. Raw power wants to move meetings around so that the amount of time for which all meetings are simultaneously scheduled is maximized. Once he does this, he will send an email to his advisor citing this number to justify the cancellation.

Of course moving meetings around affects a student's credibility. Specifically moving a meeting from time period \[**si**, **ti**\] to \[**si** + a, **ti** + a\] is possible for any _integer_ a but reduces credibility by |a| (|x| denotes absolute value of x). Raw Power currently has a credibility of **K** and is willing to sacrifice it all. He needs your help to know the maximum possible intersection of all meeting times that he can achieve whilst keeping his credibility non-negative.

 Formalizing intersection: Given a set of meetings each with a start and end time, let the maximum start time over all meetings be s and the minimum end time over all meetings be e. The intersection time of all meetings is 0 if s>=e and e-s otherwise.

### Input

- The first line contains a single integer **N**, the total number of meetings scheduled.
- **N** lines follow, the ith of which contains integers **si** and **ti**, the start time and end time of the ith meeting.
- The next line contains a single integer **Q**, denoting the number of queries.
- **Q** lines follow, the ith of which contains an integer **K** denoting the available credibility. Note that all the queries are indepedent.

### Output

- Output **Q** lines, the ith of which should contain a single integer, the answer for test case i. This value denotes the maximum attainable intersection of all meetings under the constraint of available credibility.

### Constraints

- 1 ≤ **N** ≤ 300000
- 0 ≤ **si** ≤ **ti** ≤ 109
- 1 ≤ **Q** ≤ 20
- 0 ≤ **K** ≤ 1018

### Example

<pre><b>Input:</b>
4
5 10
2 12
14 25
7 19
7
100000
4
5
6
7
8
9

<b>Output:</b>
5
0
1
2
3
4
5
</pre>**Explanation:**If the total credibility is 6, one way to obtain an intersection of 2 is to move the meeting \[14, 25\] to \[8, 19\] so that all meetings intersect in the time range \[8, 10\].

---
category_name: easy
problem_code: ICPC16D
problem_name: 'Good Sets'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 18-10-2016
tags:
    - admin3
time:
    view_start_date: 1477153800
    submit_start_date: 1477153800
    visible_start_date: 1477153800
    end_date: 1735669800
    current: 1493558154
layout: problem
---
All submissions for this problem are available.You are given array **a** consisting of **n** distinct integers. A set **s** of numbers is called _good_ if you can rearrange the elements in such a way that each element divides the next element in the order, i.e. **si | si + 1**, such that **i , where **|s|** denotes size of set **|s|**.**

Find out number of distinct _good_ sets that you can create using the values of the array. You can use one value only once in a particular set; ie. a set cannot have duplicate values. Two sets are said to be different from each other if there exists an element in one set, which does not exist in the other.

As the answer could be large, print your answer modulo **109 + 7**.

### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

First line of each test case contains an integer **n** denoting number of elements in array **a**.

Next line contains **n** space separated integers denoting the elements of array **a**.

### Output

For each test case, output a single line containing the corresponding answer.

### Constraints

- **1 ≤ T ≤ 3**
- **1 ≤ n ≤ 7.5 \* 105**
- **1 ≤ ai ≤ 7.5 \* 105**
- All the elements of array **a** are distinct.

### Example

<pre><b>Input</b>
2
2
1 2
3
6 2 3

<b>Output:</b>
3
5

</pre>### Explanation
**Test case 1.** There are three sets which are good **{1}**, **{2}**, **{1, 2}**.

**Test case 2.** There are five sets which are good **{6}**, **{2}**, **{3}**, **{6 2}**, **{6, 3}**.

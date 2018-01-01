---
category_name: easy
problem_code: CHEFQUE
problem_name: 'Chef and Queries'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 9-12-2015
tags:
    - bitset
    - cook65
    - easy
    - hashing
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFQUE'
time:
    view_start_date: 1450636200
    submit_start_date: 1450636200
    visible_start_date: 1450636200
    end_date: 1735669800
    current: 1493558120
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK65/mandarin/CHEFQUE.pdf), [Russian](http://www.codechef.com/download/translated/COOK65/russian/CHEFQUE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFQUE.pdf) as well.

As part of his daily job, Chef has to solve problems involving sets. Till now, Chef has been using inefficient methods to solve his set related problem, wasting a lot of his precious time. He has agreed to pay you a lot of money for solving the following problem for him efficiently.

First, Chef needs to perform **Q** operations on a set. Each operation is either:

- 1. Add a number to the set (if this number is NOT already present in the set).
- 2. Erase a number from the set (if this number exists in the set).
Then, he needs to find the sum of all elements of the set after performing these **Q** queries. Your job is to find this sum for him quickly.

### Input

The first line of input contains four integers — **Q**, **S1**, **A**, **B**. **S1** is the first number in the operations. **A** and **B** are special constants explained later. Every operation **Si** is represented by a single integer. If **Si** is odd, then it represents the first operation, otherwise the second type, and in both of them the integer you have to add/delete equals \[**Si** / 2\], where \[\] is the greatest integer (or floor) function.

 **Si** = (**A**\***Si-1** + **B**) mod **232** when **i** > 1.

**Note:** In this problem, the time limit is very tight. Using built-in data structures, such as set/unordered\_set in C++ or TreeSet/HashSet in Java, may lead to a Time Limit Exceed verdict.

### Output

Output a single line containing a single integer — sum of elements in the set after **Q** queries. ### Constraints

- 1 ≤ **Q** ≤ 107
- 1 ≤ **S1, A, B** ≤ 109

### Example


<pre>
<b>Input:</b>
<tt>5 1 1 1
</tt>
<b>Output:</b>
<tt>3
</tt>

<b>Input:</b>
<tt>10000000 777777777 777777777 777777777
</tt>
<b>Output:</b>
<tt>5362358669068782</tt>

</pre>### Explanation:
The sequence {Si} is 1, 2, 3, 4, 5:

Operation 1, 1 mod 2 = 1, add number \[1 / 2\] = 0 to set, sum is 0.

Operation 2, 2 mod 2 = 0, erase number \[2 / 2\] = 1 from set, 1 is not in set, so nothing happens, sum is 0.

Operation 3, 3 mod 2 = 1, add number \[3 / 2\] = 1 to set, sum is 1.

Operation 4, 4 mod 2 = 0, erase number \[4 / 2\] = 2 from set, 2 is not in set, so nothing happens, sum is 1.

Operation 5, 5 mod 2 = 1, add number \[5 / 2\] = 2 to set, sum is 3.

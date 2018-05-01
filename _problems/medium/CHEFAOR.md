---
category_name: medium
problem_code: CHEFAOR
problem_name: 'Chef and Bitwise OR Operation'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1 - 10'
source_sizelimit: '50000'
problem_author: furko
problem_tester: xcwgf666
date_added: 13-06-2015
tags:
    - dynamic
    - easy
    - furko
    - ltime25
editorial_url: 'http://discuss.codechef.com/problems/CHEFAOR'
time:
    view_start_date: 1435480200
    submit_start_date: 1435480200
    visible_start_date: 1435480200
    end_date: 1735669800
    current: 1493557914
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFAOR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME25/russian/CHEFAOR.pdf).

Chef studies very well in his University. There is only one professor who doesn't want to give him the highest grade, **A**. Chef has had a long argument with him, and eventually they agreed, that if Chef solves an algorithmic problem, he gets the highest grade. After looking at the problem, he realized he can't solve it. Once again, he approached Codechef admins for help, and once again we decided to put it off and pass on the task to you. Please, help him (and us)!

### Problem description

You are given an array **A** of integers and an integer **K**. Your goal is to divide the array into **K** consecutive disjoint non-empty groups, so that any array element belongs to **exactly one** group.

Each group can be specified by two integers **L** and **R** (**L ≤ R**) with the meaning that the group contains all the elements from the **L**th to the **R**th one (both inclusive) in the given array. The _cost_ of such a group equals to the value of **bitwise OR** of all elements in the group.

The cost of array for some particular group division equals to the sum of costs for all the groups. You have to find the maximal achievable cost of the given array.

You can read more about **bitwise OR** operation [here](https://en.wikipedia.org/wiki/Bitwise_operation#OR)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **K** denoting the number of elements in the array and number of groups, respectively.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given array.

### Output

For each test case, output a single line, containing the maximal achievable cost of the array.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **5000**
- **1** ≤ **K** ≤ **N**
- 0 ≤ **Ai** ≤ **230**
- Subtask 1(15 points): **1** ≤ **N** ≤ **100**
- Subtask 2(35 points): **1** ≤ **N** ≤ **1000**
- Subtask 3(50 points): **1** ≤ **N** ≤ **5000**
- The time limit for the first and the second subtask is **1 second**. The time limit for the third subtask is **10 seconds**.

### Example

<pre><b>Input:</b>
<tt>4
3 2
1 2 2
4 3
1 2 3 4
2 2 
1 2
11 4
66 152 7 89 42 28 222 69 10 54 99</tt>

<b>Output:</b>
<tt>5
10
3
704</tt>
</pre>### Explanation

**Example case 1**. The optimal group division is the following one: put the first two numbers to the first group, and the next one into the second. This way, you will obtain the cost of the array equal to (1 OR 2) + 2 = 3 + 2 = 5.

**Example case 2**. The first two integers should be in the first group, the third one should be in the second group, the fourth one should be in the third group. This way, we will obtain a cost of an array equal to (1 OR 2) + 3 + 4 = 3 + 3 + 4 = 10.

**Example case 3**. Each number will be in its' own group. So, we obtain a cost of 1 + 2 = 3.

**Example case 4**. Try to figure out yourself.

---
category_name: easy
problem_code: LUMPYBUS
problem_name: 'Lumpy - The Bus Driver'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: pushkarmishra
date_added: 29-07-2016
tags:
    - admin2
    - easy
    - greedy
    - ltime38
editorial_url: 'http://discuss.codechef.com/problems/LUMPYBUS'
time:
    view_start_date: 1469901600
    submit_start_date: 1469901600
    visible_start_date: 1469901600
    end_date: 1735669800
    current: 1493558165
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME38/mandarin/LUMPYBUS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME38/russian/LUMPYBUS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME38/vietnamese/LUMPYBUS.pdf) as well.

![](https://codechef_shared.s3.amazonaws.com/upfiles/Bus_Driver_Lumpy_2.jpg)Lumpy is a bus driver. Today, the conductor is absent so Lumpy has to do the conductor's job as well. There are **N** creatures in the bus. Sometimes the creatures don't carry change and can't pay the exact amount of the fare. Each creature in the bus today has paid an amount greater than his/her fare. You are given information about the **extra** amount paid by each creature, by an array **A** of size **N**, where **Ai** denotes the extra amount paid by the **i**-th creature, in rupees.

After the end of the trip, Lumpy noticed that he had **P** one rupee coins and **Q** two rupee coins. He wants to pay back the creatures using this money. Being a kind hearted moose, Lumpy wants to pay back as many creatures as he can. Note that Lumpy will not pay back the **i**-th creature if he can't pay the **exact** amount that the **i**-th creature requires with the coins that he possesses.

Lumpy is busy driving the bus and doesn't want to calculate the maximum number of creatures he can satisfy - He will surely cause an accident if he tries to do so. Can you help him out with this task?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

For each test case, first line consists of three space separated integers **N**, **P** and **Q**.

Second line consists of **N** space separated integers **A** containing **N** space integers, where **i**-th integer denotes **Ai**.

### Output

For each test case, output a single line containing an integer corresponding to maximum number of creatures that Lumpy can pay back.

### Constraints

- **1** ≤ **T** ≤ **106**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **109**
- 0 ≤ **P, Q** ≤ **1014**
- Sum of **N** over all the cases does not exceed **106**

### Subtasks

**Subtask #1 (15 points)**- **P** = 0

 **Subtask #2 (15 points)**- **Q** = 0

**Subtask #3 (70 points)**- Original constraints

### Example

<pre><b>Input:</b>
<tt>3
3 3 0
1 2 2
3 2 1
1 2 1
4 5 4
2 3 4 5</tt>

<b>Output:</b>
<tt>2
3
3</tt>
</pre>
### Explanation

 In Test **1**, Lumpy has just **3** one rupee coins. He can pay creatures numbered **{1, 2}** or creatures numbered **{1, 3}** with these coins. Thus, answer is 2.

 In Test **2**, Lumpy has **2** one rupee coins and **1** two rupee coin. In the optimal solution, Lumpy can give the two rupee coin to creature **2** and the one rupee coins to creatures **1** and **3**. Thus, answer is 3.

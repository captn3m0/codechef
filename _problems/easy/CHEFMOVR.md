---
category_name: easy
problem_code: CHEFMOVR
problem_name: 'Chef and Mover'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 14-06-2016
tags:
    - ad
    - aug17
    - berezin
    - implementation
editorial_url: 'https://discuss.codechef.com/problems/CHEFMOVR'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514816567
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/CHEFMOVR.pdf), [russian](http://www.codechef.com/download/translated/AUG17/russian/CHEFMOVR.pdf) and [vietnamese](http://www.codechef.com/download/translated/AUG17/vietnamese/CHEFMOVR.pdf) as well.

Chef's dog Snuffles has so many things to play with! This time around, Snuffles has an array **A** containing **N** integers: **A1**, **A2**, ..., **AN**.

Bad news: Snuffles only loves to play with an array in which **all** the elements are equal.

Good news: We have a _mover_ of size **D**. !

A mover of size **D** is a tool which helps to change arrays. Chef can pick two existing elements **Ai** and **Aj** from the array, such that i + **D** = j and subtract 1 from one of these elements (the element should have its value at least 1), and add 1 to the other element. In effect, a single operation of the mover, moves a value of 1 from one of the elements to the other.

Chef wants to find the minimum number of times she needs to use the mover of size **D** to make all the elements of the array **A** equal. Help her find this out.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two integers **N** and **D**, denoting the number of elements in the array and the size of the mover.
- The second line of each testcase contains **N** space-separated integers: **A1**, **A2**, ..., **AN**, denoting the initial elements of the array.

### Output

- For each test case, output a single line containing the minimum number of uses or **-1** if it is impossible to do what Snuffles wants.

### Constraints

- 1 ≤ **T** ≤ 10
- 2 ≤ **N** ≤ 105
- 1 ≤ **D** N
- 1 ≤ **Ai** ≤ 109

### Subtasks

- **Subtask 1** (30 points) : **N** ≤ 103
- **Subtask 2** (70 points) : Original constraints

### Example

<pre><b>Input:</b>
3
5 2
1 4 5 2 3
3 1
1 4 1
4 2
3 4 3 5

<b>Output:</b>
3
2
-1

</pre>### Explanation
**Testcase 1:**

Here is a possible sequence of usages of the mover:

- Move **1** from **A3** to **A1**
- Move **1** from **A3** to **A1**
- Move **1** from **A2** to **A4**

At the end, the array becomes (3, 3, 3, 3, 3), which Snuffles likes. And you cannot achieve this in fewer moves. Hence the answer is 3.

**Testcase 2:**

Here is a possible sequence of usages of the mover:

- Move **1** from **A2** to **A1**
- Move **1** from **A2** to **A3**

At the end, the array becomes (2, 2, 2), which Snuffles likes. And you cannot achieve this in fewer moves. Hence the answer is 2.

**Testcase 3:**

It is impossible to make all the elements equal. Hence the answer is -1.

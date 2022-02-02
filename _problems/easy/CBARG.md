---
category_name: easy
problem_code: CBARG
problem_name: 'Chef and Memory Limit'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: null
date_added: 22-02-2015
tags:
    - cakewalk
    - june15
    - simulation
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/CBARG'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JUNE15/mandarin/CBARG.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/CBARG.pdf).

Recently Chef has decided to make some changes in our beloved **Codechef**. As you know, each problem at Codechef has its memory and time limits. To make problems even more challenging, he decided to measure allocated memory in a different way. Now judge program will be calculating not the maximum memory usage during the execution of all test files, but all the memory ever allocated by the solution program. But as Chef is not that good in algorithms, so he asks you to write a program that will calculate total memory usage of a solution.

So, you are given **N** numbers **M1, , ,MN** representing the measurements of consumed memory (in MBs) for **N** test files. In other terms, it means that on i-th test file, program took **Mi** MBs of memory. Initially, there is no memory allocated for your program. Before running your program on each test file, if the currently allocated memory is more than memory needed for the current test file, then there will be a deallocation of the memory to fit the current program. Also, if there is less than needed memory available, then allocation of memory will happen so as to fit the current program. e.g. Let us say that our program took 10 MBs on current test file. So, assuming if there was 12 MBs memory allocated before running the program on current test file, then there will happen a deallocation of 2 MBs. Assuming if there was 8 MBs memory allocated before running the program on current test file, then there will happen a allocation of 2 MBs.

Calculate the total memory **allocated** for running the solution program on all the **N** test files. Please see third sample for more clarity.

### Input

First line of input contains a single integer **T** denoting the number of test cases. First line of each test case contains a single integer **N** denoting the number of measurements. Second line of each test case contains **N** space separated integers, where **ith** integer denotes the consumption of memory for **ith** i-th test file.

### Output

For each test case, print total memory allocated for running the solution program.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Mi** ≤ **109**
- sum of **N** over all test cases does not exceed **105**

### Subtasks

Subtask 1 (30 points):

- 1 ≤ T ≤ 100
- 1 ≤ N ≤ 100
- 1 ≤ Mi ≤ 100

Subtask 3 (70 points):

- Original constraints.

### Example

<pre><b>Input:</b>
3
2
1 1
5
1 2 3 4 5
3
1 3 2

<b>Output:</b>
1
5
3
</pre>
### Explanation

**Example case 1.** Initially, there was no memory allocated. For running first test file, there was a memory allocation of 1 MBs. There was no allocation/ deallocation for running your program on second test file.

**Example case 2.** On running on each test file, there was a further allocation of 1 MBs from previous one. So, there are total 5 MBs of memory allocated while running the program.

**Example case 3.** Initially, there was no memory allocated. For running first test file, there was a memory allocation of 1 MBs. For running second test file, there was a further memory allocation of 2 MBs to have 3 MBs of memory needed, then in the last file, there was a deallocation of 1 MB of memory so as to get 2 MBs of memory needed for running the program. So, overall, there was 1 + 2 = 3 MBs of memory ever allocated in the program. Note that we are only counting allocated memory, not allocated + unallocated.

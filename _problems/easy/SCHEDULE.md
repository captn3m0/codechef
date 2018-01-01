---
category_name: easy
problem_code: SCHEDULE
problem_name: 'Cooking Schedule'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: xcwgf666
date_added: 30-03-2016
tags:
    - binary
    - easy
    - kingofnumbers
    - march17
editorial_url: 'https://discuss.codechef.com/problems/SCHEDULE'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/SCHEDULE.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/SCHEDULE.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/SCHEDULE.pdf?v=1) as well.

Chef is a well-known chef, and everyone wishes to taste his dishes.

As you might know, cooking is not an easy job at all and cooking everyday makes the chef very tired. So, Chef has decided to give himself some days off.

Chef has made a schedule for the next **N** days: On **i**-th day if **A**i is equal to **1** then Chef is going to cook a delicious dish on that day, if **A**i is equal to  then Chef is going to rest on that day.

After Chef made his schedule he discovered that it's not the best schedule, because there are some big blocks of consecutive days where Chef will cook which means it's still tiring for Chef, and some big blocks of consecutive days where Chef is going to rest which means chef will be bored doing nothing during these days.

Which is why Chef has decided to make changes to this schedule, but since he doesn't want to change it a lot, he will flip the status of at most **K** days. So for each day which Chef chooses, he will make it **1** if it was  or he will make it  if it was **1**.

Help Chef by writing a program which flips the status of at most **K** days so that the size of the maximum consecutive block of days of the same status is minimized.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains two integers: **N** denoting the number of days and **K** denoting maximum number of days to change.

The second line contains a string of length **N** , of which the **i**-th character is  if chef is going to rest on that day, or **1** if chef is going to work on that day

### Output

For each test case, output a single line containing a single integer, which is the minimum possible size of maximum block of consecutive days of the same status achievable.

### Constraints

- **1** ≤ **T** ≤ **11,000**
- **1** ≤ **N** ≤ **106**
- The sum of **N** in all test-cases won't exceed **106**.
- ≤ **K** ≤ **106**
- ≤ **Ai** ≤ **1**

### Subtasks

- Subtask #1 (20 points): **N** ≤ 10
- Subtask #2 (80 points): Original Constraints

### Example

<pre><b>Input:</b>
<tt>
2
9 2
110001111
4 1
1001
</tt>

<b>Output:</b>
<tt>
2
2
</tt>

</pre>### Explanation
**Example case 1:** The answer is 2 because we can change the string to: 110101011

**Example case 2:** If we don't change the input string at all, the answer will be 2. It is the best value we can achieve under the given conditions.

---
category_name: easy
problem_code: CHEFSUBA
problem_name: 'Chef and Sub Array '
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 18-11-2015
tags:
    - berezin
    - long
    - may17
editorial_url: 'https://discuss.codechef.com/problems/CHEFSUBA'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284059
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/CHEFSUBA.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/CHEFSUBA.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFSUBA.pdf) as well.

Chef has a binary array **A** of length **N**. He also has a frame that can focus on at max **K** consecutive elements of the array.

Chef has a lovely dog which likes to do following two things.

- Shifting the array **A** to the right by one element (**N**-th element becomes 1st, 1st becomes 2nd and so on)
- Asking Chef what is the maximal number of elements equal to 1, that can be captured by a frame (frame can capture **not more** than **K** consecutive elements of array).

Help Chef entertain his Dog!

### Input

The first line of each test case contains three integers **N**, **K** and **P** denoting the number of elements in array **A**, size of a frame and the number of Dog's requests.

The second line contains **N** space-separated integers **A**1, **A**2, ..., **AN** denoting the elements of array.

The third line contains string consisting of **P** characters, i-th character stands for dog's i-th question and equals **'!'** if Dog shifts the array and **'?'** if dog asks what is the maximal number of ones captured by the frame.

### Output

For each Dog's question output a single line containing an integer corresponding to the answer of the question.

### Constraints

- 1 ≤ **N, K, P** ≤ 105
- 0 ≤ **Ai** ≤ 1

### Subtasks

- **Subtask #1 (30 points)** **N, K, P** ≤ 103
- **Subtask #2 (70 points)** Original constraints.

### Example

<pre><b>Input:</b>
5 3 4
1 0 0 1 1
?!!?

<b>Output:</b>
2
3
</pre>
### Explanation

**Example case 1.**

For the first question , Chef can pick last **3** elements (or last two, no matter) for his frame, and will have **2** elements equal **1**.

After first shift (exclamation mark) array will become: **1 1 0 0 1**.

After second shift (exclamation mark) array will become: **1 1 1 0 0**.

Now for the second question Chef can pick first **3** elements for his frame, and will have **3** elements equal **1**.

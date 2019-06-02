---
category_name: medium
problem_code: EXNETWRK
problem_name: 'Computer Network'
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
problem_author: xcwgf666
problem_tester: pavel1996
date_added: 29-10-2015
tags:
    - construction
    - easy
    - ltime31
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/EXNETWRK'
time:
    view_start_date: 1451205000
    submit_start_date: 1451205000
    visible_start_date: 1451205000
    end_date: 1735669800
    current: 1493557918
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME31/mandarin/EXNETWRK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/EXNETWRK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/EXNETWRK.pdf) as well.

You have been appointed as the designer for your school's computer network.

In total, there are **N** computers in the class, and **M** computer-to-computer connections need to be made. Also, there are three mandatory conditions the design should fulfill.

The first requirement is that any computer in the network should be able to communicate with any other computer through the connections, possibly, through some other computers.

Network attacks are possible, so the second requirement is that even if any one computer from the network gets disabled so that the rest of the computers are unable to communicate with it, the rest of the computers can still communicate with each other. In other words, the first requirement still holds for any subset of **(N-1)** computers.

The third requirement is that there shouldn't be any irrelevant connections in the network. We will call a connection **irrelevant** if and only if after its' removal, the above two requirements are still held.

Given **N, M**, please build a network with **N** computers and **M** connections, or state that it is impossible.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of each test case contains a pair of space-separated integers **N** and **M** denoting the number of computers and the number of connections.

### Output

Output **T** blocks.

If it is impossible to construct a network with the given parameters for the corresponding test case, output just **-1 -1**. Otherwise, output **M** lines, each of which contains a space-separated pairs of integers denoting the IDs of the computers that should be connected. Note that multiple connections between any pair of computers and connections connecting a computer to itself are implicitly not allowed due to the third requirement.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **M** ≤ **N \* (N - 1) / 2**
- **1** ≤ Sum of all **N** ≤ **1000**
- Subtask 1 (21 point): **1** ≤ **N** ≤ **4**
- Subtask 2 (79 points): **1** ≤ **N** ≤ **100**

### Example

<pre><b>Input:</b>
<tt>2
10 1
5 5</tt>

<b>Output:</b>
<tt>-1 -1
1 2
2 3
3 4
4 5
5 1</tt>
</pre>
### Explanation

**Example case 1.** There are not enough connections even to satisfy the first requirement.

**Example case 2.** The obtained network satisfies all the requirements.

---
category_name: hard
problem_code: SADPAIRS
problem_name: 'Chef and Sad Pairs'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: null
date_added: 30-05-2016
tags:
    - hard
    - june16
    - kevinsogo
    - tree
editorial_url: 'http://discuss.codechef.com/problems/SADPAIRS'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1493556988
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/SADPAIRS.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/SADPAIRS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/SADPAIRS.pdf) as well.

Chef has recently set up a network between the **N** residents of the dormitory. Each resident owns a personal computer. There are direct connections between **E** pairs of computers. Pairs of computers not directly connected can still communicate if there is a path between them in the network.

All **N** residents are fans of Basketball, but each one has their own favorite team. The **i**th resident's favorite team is team **Gi**. Naturally, fans of the same team want to communicate with each other via the network.

Unfortunately, Chef isn't too knowledgeable about computers so he didn't ensure that all pairs of computers can communicate with each other. We call a pair of residents **(i, j)** **sad** if they have the same favorite team (i.e., **Gi** = **Gj**) but they can't communicate with each other. Thus, there can be many sad pairs in the network right now.

Even worse, from time to time, someone gets disconnected from the network, further increasing the number of sad pairs. When a resident is disconnected, all direct connections to and from his/her computer becomes unusable.

Chef didn't anticipate all these problems and has turned to you for help. Your first task is to submit a report containing **N** integers, where the **i**th integer is *the number of sad pairs in the network if the **i**th resident was disconnected*.

### Input

The first line contains two integers, **N** and **E**.

The second line contains **N** space-separated integers **G1**, **G2**, ..., **GN** denoting the residents' favorite teams.

The following **E** lines each contains two integers, **ai** and **bi**, which means that there is a direct connection between computers of resident **ai** and **bi**. Connections are bidirectional.

### Output

Output **N** lines. The **i**th line must contain a single integer, the number of sad pairs if the **i**th resident was disconnected from the network.

### Constraints

- **5** ≤ **N** ≤ **2×105**
- **1** ≤ **Gi** ≤ **106**
- 0 ≤ **E** ≤ **min(2×105, **N(N-1)/2**)**
- **1** ≤ **ai** < **bi** ≤ **N**
- No pair (**ai**, **bi**) will appear more than once in the input.

### Subtasks

**Subtask #1: (25 points)** Every computer can communicate with at most 59 other computers.

**Subtask #2: (75 points)** No additional constraints.

### Example

<pre><b>Input:</b>
<tt>7 6
1 3 3 1 1 3 1
1 2
2 3
1 3
4 5
5 6
6 7
</tt>
<b>Output:</b>
<tt>5
6
6
7
8
7
7
</tt>
</pre>
### Explanation

In the given network, residents 1, 4, 5 and 7 all have team 1 as their favorite, and 2, 3 and 6 all have team 3 as their favorite.

- If resident 1 is disconnected, then there are 5 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6).
- If resident 2 is disconnected, then there are 6 sad pairs: (1,4), (1,5), (1,7), (2,3), (2,6), (3,6).
- If resident 3 is disconnected, then there are 6 sad pairs: (1,4), (1,5), (1,7), (2,3), (2,6), (3,6).
- If resident 4 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,5), (4,7).
- If resident 5 is disconnected, then there are 8 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,5), (4,7), (5,7).
- If resident 6 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,7), (5,7).
- If resident 7 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,7), (5,7).

---
category_name: medium
problem_code: WSC
problem_name: 'A wolf, a sheep and cabbage'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: white_king
date_added: 10-08-2014
tags:
    - cakewalk
    - construction
    - language
    - ltime18
    - programming
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/WSC'
time:
    view_start_date: 1417336200
    submit_start_date: 1417336200
    visible_start_date: 1417336200
    end_date: 1735669800
    current: 1493557955
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME18/mandarin/WSC.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME18/russian/WSC.pdf).

The following is an easy game that the setter of this problem played when he was 8:

_A boatman, a wolf, a sheep, and a cabbage are on the bank of a river. They have a small boat that is capable of carrying the boatman and at most one other animal/item with him. However, if left alone by the boatman, the wolf can eat the sheep, and the sheep can eat the cabbage. How can all four be moved safely to the opposite bank of the river?_

[Here](http://coolmath-games.com/Logic-wolfsheepcabbage/index.html) is a nice visualization of the whole process in the original game. Disclaimer: writers, testers and CodeChef are not related to this link.

This leads to a more general problem. If there are other groups of animals/items with the boatman, is it possible to move them all to the opposite bank of the river in such a way that nobody/nothing gets eaten?

We will give you the number of animals/items (not including the boatman). Moreover, we will give you all a list of pairs of the form "**X Y**" where the **X**-th animal/item will be eaten by the **Y**-th one if they are both on the opposite bank to the boatman.

You are to determine **whether it is possible** to achieve the task or not.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test contains two space separated integers **N** and **M** - the number of animals/items not including the boatman, and the number of relations of the form "**X** will be eaten by **Y**", respectively.

The following **M** lines contain pairs of the form **X Y** with the meaning that the **X**-th animal/item will be eaten by the **Y**-th one if they are both on the opposite bank to the boatman.

### Output

For each test case, output a single line containing either "YES" or "NO" - the answer to the question "Is it possible to move them all to the opposite bank of the river in such a way that nobody/nothing gets eaten?".

### Constraints

- **1** ≤ **T** ≤ **100000**
- Subtask 1: **1** ≤ **N** ≤ **5**, 0 ≤ **M** ≤ **10** - 73 points.
- Subtask 2: **1** ≤ **N** ≤ **10**, 0 ≤ **M** ≤ **20** - 27 points.

### Example

<pre><b>Input:</b>
2
3 2
1 2
2 3
3 3
1 2
2 3
1 3

<b>Output:</b>
YES
NO
</pre>### Explanation

The first example is the original version of the problem.

The second example would have a solution if a boat could seat an additional animal/item.

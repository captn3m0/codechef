---
category_name: easy
problem_code: BINTOUR
problem_name: 'Binary Tournament'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: null
date_added: 21-01-2014
tags:
    - combinatorics
    - easy
    - kostya_by
    - march14
editorial_url: 'http://discuss.codechef.com/problems/BINTOUR'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493558211
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MARCH14/mandarin/BINTOUR.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/BINTOUR.pdf).

Knights' tournaments were quite popular in the Middle Ages. A lot of boys were dreaming of becoming a knight, while a lot of girls were dreaming of marrying a knight on a white horse.

In this problem we consider one of these tournaments.

Let's us call a tournament *binary*, if it runs according to the scheme described below:

- Exactly **N** knights take part in the tournament, **N**=2**K** for some integer **K** &gt; 0.
- Each knight has a unique skill called *strength*, described as an integer from the interval \[1, **N**\].
- Initially, all the knights are standing in a line, waiting for a battle. Since all their strengths are unique, each initial configuration can be described as a permutation of numbers from 1 to **N**.
- There are exactly **K** rounds in the tournament, 2**K - i + 1** knights take part in the **i**'th round. The **K**'th round is called *the final*.
- The **i**'th round runs in the following way: for each positive integer **j** ≤ 2**K - i** happens a battle between a knight on the **2∙j**'th position and a knight on the **2∙j+1**'th position. The strongest of two continues his tournament, taking the **j**'th position on the next round, while the weakest of two is forced to leave.
- The only knight, who has won **K** rounds, is the winner. The only knight, who has won **K - 1** rounds, but lost the final, is the runner-up.

As you can see from the scheme, the winner is always the same, an initial configuration doesn't change anything. So, your task is to determine chances of each knight to appear in the final.

Formally, for each knight you need to count the number of initial configurations, which will lead him to the final. Since the number can be extremly huge, you are asked to do all the calculations under modulo 109 + 9.

### Input

The first line contains the only integer **K**, denoting the number of rounds of the tournament.

### Output

Output should consist of **2K** lines. The **i**'th line should contain the number of initial configurations, which lead the participant with strength equals to **i** to the final.

### Constraints

1 ≤ **K** &lt; 20

### Examples

<pre><b>Input:</b>
1

<b>Output:</b>
2
2
</pre>
<pre><b>Input:</b>
2

<b>Output:</b>
0
8
16
24
</pre>
### Explanation

In the first example we have **N**=2 knights. Let's consider each initial configuration that could appear and simulate the tournament.

(1, 2) -&gt; (2)

(2, 1) -&gt; (2)

In the second example we have **N**=4 knights. Let's consider some initial configurations that could appear and simulate the tournament.

(1, 2, 3, 4) -&gt; (2, 4) -&gt; (4)

(3, 2, 4, 1) -&gt; (3, 4) -&gt; (4)

(4, 1, 3, 2) -&gt; (4, 3) -&gt; (4)

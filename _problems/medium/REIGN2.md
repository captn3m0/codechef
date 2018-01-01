---
category_name: medium
problem_code: REIGN2
problem_name: 'Reign 2'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: shangjingbo
date_added: 28-11-2013
tags:
    - cook62
    - dynamic
    - easy
    - greedy
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/REIGN2'
time:
    view_start_date: 1442773706
    submit_start_date: 1442773706
    visible_start_date: 1442773800
    end_date: 1735669800
    current: 1493557875
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/COOK62/mandarin/REIGN2.pdf) and [Russian](/download/translated/COOK62/russian/REIGN2.pdf) as well.

Crueland is a dangerous region following ancient traditions. Every day, there are confrontations among local rulers, and thus many civilians are forced to be refugees. The only recognized way of resolving issues in Crueland is by means of physical power.

King George is thought to be one of the most reasonable and careful rulers in Crueland. As a reasonable ruler, he understands that the best defense is a good offense. Therefore, he decided to conquer some castles and lands to frighten his enemies.

There are **N** castles that can be conquered by George. As a careful ruler, he won't let his people die without a strong reason. After careful solitary consideration, he has decided to conquer **exactly K** castles during the next **K** days, an aim he plans to achieve by conquering one castle every day for the next **K** days.

As reported by King George's spies, **Ai + (j - 1) × Bi** enemy knights will be protecting the **i**th castle during the **j**th day. When attacking a castle, if the King sends as many knights as those defending it, it's sufficient to be conquer that castle. Another requirement is that one knight cannot be sent to conquer two different castles.

Now, you are the _Hand of the King_. Though caring about the King is your duty, you know that he is a tyrant and you want people to learn the truth about him. Thus, you want to sabotage George's military campaign: maximize the total number of knights used during all the conquests. In this way, his subjects will learn that he doesn't care about them too much. As you are the king's trusted advisor, you can choose a set of **K** castles, that the king should conquer. George trusts you enough, so you are assured that he will conquer exactly the set of castles you chose. After you provide a set of castles, George will choose the order in which he will conquer them. You can assume that George always chooses the order which minimizes the total number of knights used during all the conquests.

Your task is to find the maximum possible total number of knights that can be used during the campaign and reached by delegating a set of **K** castles to conquer. Also, you are not sure about the value of **K**, so you should find the optimal answer for each **K = 1, 2, ... , N**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of a test case description contains a single integer **N**.

The second line of the description contains **N** integers, where the **i**th denotes **Ai**.

The third line of the description contains **N** integers, where the **i**th denotes **Bi**.

### Output

For each test case, output a single line containing **N** integers: the maximal possible total number of knights used during all the campaign for each **K = 1, 2, ... , N**.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 5000
- 0 ≤ **Ai**, **Bi** ≤ 109
 
### Example

 ```
<b>Input:</b>
2
4
3 1 1 5
4 5 3 4
5
4 6 4 4 3
9 6 7 9 8

<b>Output:</b>
5 12 21 31
6 17 36 61 91


<pre>
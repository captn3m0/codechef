---
category_name: hard
problem_code: STARROAD
problem_name: 'Roads in Stars'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 27-04-2016
tags:
    - biginteger
    - chinese
    - dynamic
    - garner
    - matrix
    - may16
    - medium
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/STARROAD'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493556853
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/STARROAD.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/STARROAD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/STARROAD.pdf) as well.

It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire.

In light of these events, Chef, the leader of the rebel alliance, wants to build safe connections in galaxy with **N** **stars**. There are **M** bidirectional **space roads** in space that connect pairs of stars together. Travelling through one space road takes 1 day.

To avoid detection by the Empire, Chef decided that rebels must never travel alone. Instead, they must travel using armored rebel spaceships. Each spaceship is designated two stars, and a fixed route between these stars. A **route** is just a path composed of roads that connects two stars, but to increase security, Chef added the following restrictions on routes:

- Each route must be traversable within at most **K** days.
- Roads may be traversed any number times in a single route, in both directions.

After some time has passed, Chef and his engineers were able to *build a spaceship for every possible route between stars*.

Unfortunately, the powerful Empire discovered this and plans to destroy these spaceships to maintain control of the galaxy. Specifically, they deployed a new superweapon called the Death Starkiller Base, which is able to destroy **X** spaceships at once! It works by analyzing all spaceships that pass through Empire-controlled star systems.

Unfortunately, since the destruction of the Empire's two previous superweapons, the budget for the new superweapon is crippled, so the Death Starkiller Base has some severe restrictions:

- It can only destroy **exactly** **X** spaceships per usage. Not more, not less.
- It can only destroy a group of spaceships if they travel between the *same pair of stars*.

Despite these flaws, the Empire still used the superweapon as many times as possible, until there aren't enough groups of spaceships any more to destroy.

To avoid more casualties, Chef decided to retire most of the surviving spaceships. Chef wants to retire as many spaceships as possible, but in order to stay connected, Chef wants to do this such that *there is still a way to get from any star to another using spaceships*. How many ways are there for Chef to retire spaceships so that this is satisfied?

Note that a spaceship can only pick up or drop off people at the start or end of its journey, so a single spaceship that happens to pass through all stars isn't enough (unless there are only two stars).

### Input

The first line of input contains four positive integers - **N**, **M**, **X**, **K**. The next **M** lines each contains two integers **U**, **V** stars which connect by space road. All space roads are pairwise distinct.

### Output

Output a single line containing a single integer — the solution of Chef's problem.

### Constraints

- 1 ≤ **N** ≤ 100
- 0 ≤ **M** ≤ **N**x**(N-1)**/2
- 1 ≤ **K** ≤ 1018
- 1 ≤ **X** ≤ 7777777
- 1 ≤ **U** < **V** ≤ **N**
- Each space road (**U**, **V**) will be in input at most once.

### Subtasks

- **Subtask 1: (10 pts)** **N** ≤ 5.
- **Subtask 2: (25 pts)** **N** ≤ 30.
- **Subtask 3: (65 pts)** Original constraints.

### Example

<pre>
<b>Input:</b>
<tt>3 3 100 3
1 2
2 3
3 1
</tt>
<b>Output:</b>
<tt>75</tt>
</pre>
<pre>
<b>Input:</b>
<tt>3 3 2 3
1 2
2 3
3 1
</tt>
<b>Output:</b>
<tt>3</tt>
</pre>
<pre>
<b>Input:</b>
<tt>5 8 10000 1000000000
4 5
3 5
1 4
1 3
2 3
2 4
1 2
1 5
</tt>
<b>Output:</b>
<tt>2220611572265625</tt>
</pre>
### Explanation:

**Example case 1.** There are five possible routes between stars 1 and 2 traversable in not more than 3 days: {1-2, 1-3-2, 1-2-1-2, 1-2-3-2, 1-3-1-2}. There are also five routes between stars 2 and 3, and also between stars 1 and 3. There are three possible plans for the remaining routes:

- A route remains between 1 and 2, and between 2 and 3. There are 5 x 5 = 25 ways to do this.
- A route remains between 2 and 3, and between 3 and 1. There are 5 x 5 = 25 ways to do this.
- A route remains between 3 and 1, and between 1 and 2. There are 5 x 5 = 25 ways to do this.

All in all, there are 25 + 25 + 25 = 75 plans.

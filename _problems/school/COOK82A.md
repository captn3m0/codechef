---
category_name: school
problem_code: COOK82A
problem_name: 'La Liga'
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
problem_author: deadwing97
problem_tester: kingofnumbers
date_added: 20-05-2017
tags:
    - cakewalk
    - cook82
    - deadwing97
time:
    view_start_date: 1495391400
    submit_start_date: 1495391400
    visible_start_date: 1495391400
    end_date: 1735669800
    current: 1497283944
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK82/mandarin/COOK82A.pdf), [russian](http://www.codechef.com/download/translated/COOK82/russian/COOK82A.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82A.pdf) as well.

Today is the final round of La Liga, the most popular professional football league in the world. Real Madrid is playing against Malaga and Barcelona is playing against Eibar. These two matches will decide who wins the league title. Real Madrid is already 3 points ahead of Barcelona in the league standings. In fact, Real Madrid will win the league title, except for one scenario: If Real Madrid loses against Malaga, and Barcelona wins against Eibar, then the La Liga title will go to Barcelona. In any other combination of results, Real Madrid will win the title.

You will be given multiple scenarios for these two games, where in each one you will be given the number of goals each team scored in their respective match. A team wins a match if it scores more than the opponent. In case they score the same number of goals, it's a draw. Otherwise, the team loses the game. You are asked to tell the winner of the La Liga title in each scenario.

### Input

The first line contains a single number **T**, the number of scenarios. Each scenario is described by four lines. Each line starts with a team name followed by the number of goals this team scored in its corresponding match. (Barcelona plays Eibar and Real Madrid plays Malaga). The names are given in any arbitrary order within a scenario.

### Output

For each scenario, output a single line showing the title winner in case this scenario happens. It should be either "RealMadrid" or "Barcelona".

### Constraints

- 1 ≤ **T** ≤ **500**
- 0 ≤ number of goals scored by a team in a match ≤ **20**

### Example

<pre><b>Input:</b>
2
Barcelona 2
Malaga 1
RealMadrid 1
Eibar 0
Malaga 3
RealMadrid 2
Barcelona 8
Eibar 6

<b>Output:</b>
RealMadrid
Barcelona
</pre>
### Explanations

In the first scenario, Barcelona wins against Eibar, because they scored more goals (2 > 0). But Real Madrid draws against Malaga, because they both score 1 goal each. So, Real Madrid wins the league title.

In the second scenario, Barcelona wins against Eibar (8 > 6). And Real Madrid loses against Malaga (2

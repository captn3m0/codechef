---
category_name: school
problem_code: TEAMFORM
problem_name: 'Team Formation For Snackdown'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 26-05-2017
tags:
    - admin2
    - cakewalk
    - snckpa17
editorial_url: 'https://discuss.codechef.com/problems/TEAMFORM'
time:
    view_start_date: 1495992600
    submit_start_date: 1495992600
    visible_start_date: 1495992600
    end_date: 1735669800
    current: 1497284046
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPA17/mandarin/TEAMFORM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPA17/russian/TEAMFORM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPA17/vietnamese/TEAMFORM.pdf) as well.

There are **n** people who want to take part in SnackDown. In the competition in this problem, a team should consist of exactly two people (as opposed to the real contest, where single-member teams are allowed). Of course, a person can only participate in a single team. Out of these, 2 \* **m** people have already formed their teams, i.e. there are **m** teams already formed. The remaining people want to participate and make teams amongst themselves. Can you please tell whether it is possible to divide them into teams so that all the **n** people can participate?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers **n, m**.

The i-th of the next **m** lines contains two space separated integers ui, vi denoting that the pair of people ui, and vi have decided to form a team.

### Output

For each test case, output "yes" or "no" (without quotes) corresponding to the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ 100
- 2 ≤ **n** ≤ 100
- 1 ≤ **m** ≤ n / 2
- 1 ≤ ui, vi ≤ n
- The **m** already formed teams will be valid.

### Example

<pre>
<b>Input</b>
4
2 1
1 2
4 1
1 3
5 2
1 2
4 5
5 1
1 4

<b>Output</b>
yes
yes
no
no

</pre>### Explanation
**Example 1**. Persons 1 and 2 have already formed the team. No other person is left. So, the answer is yes.

**Example 2**. Persons 1 and 3 have already formed the team. Persons 2 and 4 can form their own team. No other person is left. So, the answer is yes.

**Example 3**. Persons 1 and 2 have already formed the team. Persons 4 and 5 have also formed their own team. Only person 3 is left. A single person can't form a team. So, the answer is no.

**Example 4**. Persons 1 and 4 have already formed the team. Persons 2, 3 and 5 cannot all participate, because at least one person will be left out. So, the answer is no.

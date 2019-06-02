---
category_name: school
problem_code: CCOOK
problem_name: 'Chef and Cook-Off'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: wwwwodddd
date_added: 3-02-2018
tags:
    - cakewalk
    - conditions
    - cook91
    - loops
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CCOOK'
time:
    view_start_date: 1518978600
    submit_start_date: 1518978600
    visible_start_date: 1518978600
    end_date: 1735669800
    current: 1525454387
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK91/mandarin/CCOOK.pdf), [Russian](http://www.codechef.com/download/translated/COOK91/russian/CCOOK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK91/vietnamese/CCOOK.pdf) as well.

Chef has obtained the results of a past Cook-Off. He wants to estimate the skill level of each contestant. The contestants can be classified [with high probability](https://en.wikipedia.org/wiki/With_high_probability) (w.h.p.) based on the number of solved problems:

- A contestant that solved exactly 0 problems is a beginner.
- A contestant that solved exactly 1 problem is a junior developer.
- A contestant that solved exactly 2 problems is a middle developer.
- A contestant that solved exactly 3 problems is a senior developer.
- A contestant that solved exactly 4 problems is a hacker.
- A contestant that solved all five problems is [Jeff Dean](https://www.quora.com/What-are-all-the-Jeff-Dean-facts).

Please help Chef to identify the programming level of each participant.

### Input

- The first line of the input contains a single integer **N** denoting the number of competitors.
- **N** lines follow. The **i**-th of these lines contains five space-separated integers **Ai, 1, Ai, 2, Ai, 3, Ai, 4, Ai, 5**. The **j**-th of these integers (1 ≤ **j** ≤ 5) is 1 if the **i**-th contestant solved the **j**-th problem and 0 otherwise.

### Output

For each participant, print a single line containing one string denoting Chef's classification of that contestant — one of the strings "Beginner", "Junior Developer", "Middle Developer", "Senior Developer", "Hacker", "Jeff Dean" (without quotes).

### Constraints

- 1 ≤ **N** ≤ 5000
- 0 ≤ **Ai, j** ≤ 1 for each valid **i**, **j**

### Example

<pre><b>Input:</b>

7
0 0 0 0 0
0 1 0 1 0
0 0 1 0 0
1 1 1 1 1
0 1 1 1 0
0 1 1 1 1
1 1 1 1 0

<b>Output:</b>

Beginner
Middle Developer
Junior Developer
Jeff Dean
Senior Developer
Hacker
Hacker
</pre>
### Explanation

The first contestant has no solved problems, therefore he is a beginner. The second contestant solved 2 problems (the second and fourth problem), therefore he has the skills of a middle developer. The third contestant solved 1 problem, therefore he's at the expected level of a junior developer. The fourth contestant solved 5 problems — we can guess it was Jeff Dean. The fifth contestant solved 3 problems, so he is a senior developer. And the last two contestants should be hackers because they solved exactly 4 problems each.

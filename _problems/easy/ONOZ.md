---
category_name: easy
problem_code: ONOZ
problem_name: 'Digital clock'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xellos0
problem_tester: antoniuk1
date_added: 27-01-2016
tags:
    - cakewalk
    - cook68
    - string
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/ONOZ'
time:
    view_start_date: 1458498600
    submit_start_date: 1458498600
    visible_start_date: 1458498600
    end_date: 1735669800
    current: 1493558173
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK68/mandarin/ONOZ.pdf), [Russian](http://www.codechef.com/download/translated/COOK68/russian/ONOZ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK68/vietnamese/ONOZ.pdf) as well.

_3:33_

It's possible for all the digits displayed on a digital clock in the _hours:minutes_ format to be identical. The time shown above (_3:33_) is an example of such a situation. Other examples are _2:2_ and _1:11_. Note that the digits of _33:33_ are identical, but it is not a valid time on a usual digital clock.

The above example was for a usual 24-hour format digital clock. Let's consider a more general clock, where an hour lasts **M** minutes and a day lasts **H** hours (therefore, the clock can show any number of hours between  and **H-1**, inclusive, and any number of minutes between  and **M-1**, inclusive). Both the hours and the minutes are shown **without leading zeroes** in decimal notation and their separator (e.g., ':') doesn't matter.

Can you tell how many minutes during a day will the digital clock have identical digits displayed on it?

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- Each of the next **T** lines contains two space-separated integers **H** and **M** for one test case.

### Output

For each test case, output a single line corresponding to the answer of the problem.

### Constraints

- **1 ≤ T ≤ 50**
- **1 ≤ H, M ≤ 100**

### Example

```
<b>Input:</b>
6
24 60
34 50
10 11
10 12
11 11
1 1

<b>Output:</b>
19
20
10
11
10
1

```
### Explanation

**Example case 1.** A clock shows two identical digits at times _0:0_, _1:1_, .., _9:9_, three identical digits at times _11:1_, _22:2_, _1:11_, _2:22_, _3:33_, _4:44_, _5:55_, and four identical digits at times _11:11_ and _22:22_. So, there are 19 minutes during which the time displayed by the clock will have identical digits.

**Example case 2.** Compared to the previous case, the clock doesn't show _5:55_, but can show _33:3_ and _33:33_.

**Example case 6.** In this example, our day consists of one hour and one hour consists of one minute. Hence, the entire day is just 1 minute - the only time the digital clock will display is 0:0 during the entire day, (i.e. the entire hour, i.e. entire minute). And 0:0 has all digits identical, so the answer is 1.
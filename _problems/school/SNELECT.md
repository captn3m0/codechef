---
category_name: school
problem_code: SNELECT
problem_name: 'Snakes, Mongooses and the Ultimate Election'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 30-05-2017
tags:
    - ad
    - admin2
    - easy
    - greedy
    - snckpb17
editorial_url: 'https://discuss.codechef.com/problems/SNELECT'
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497283980
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNELECT.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/SNELECT.pdf)and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNELECT.pdf) as well.

In Snakeland, there are some snakes and mongooses. They are lined up in a row. The information about how exactly they are lined up it is provided to you by a string of length **n**. If the i-th character of this string is 's', then it means that there is a snake at the i-th position, whereas the character 'm' denotes a mongoose.

You might have heard about the age-old rivalry between hares and tortoises, but in Snakeland, the rivalry between snakes and mongooses is much more famous. The snakes and the mongooses want to hold a final poll in which the ultimate winner of this age-old battle will be decided. If the snakes get more votes than the mongooses, they will be the ultimate winners. Similarly, if the mongooses get more votes than snakes, they will be the ultimate winners. Obviously, each animal is loyal to their species, i.e. each snake will vote for the snakes to be the ultimate champions and each mongoose for the mongooses.

Tomorrow's the election day. Before the elections, the mongooses decided to cheat. They planned that each mongoose will eat at most one of its neighbor snakes. Two animals are said to be neighbors of each other if they are consecutive to each other in the row. After this, the elections will be held. The mongooses planned in such a way that the number of snakes eaten is maximized. Can you find out who will win the final poll? Output "snakes", "mongooses" or "tie" correspondingly.

### Input

First line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

The only line of each test case contains a string consisting of characters 's' and 'm'.

### Output

For each test case output a single line containing "snakes", "mongooses" or "tie" correspondingly (without quotes).

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **|s|** ≤ 100

### Example

<pre>
<b>Input</b>
4
sm
ssm
sms
ssmmmssss

<b>Output</b>
mongooses
tie
tie
snakes
</pre>### Explanation

**Example 1**. The mongoose will eat the snake. Only the mongoose will be left. So, on the election day, there is one mongoose and zero snakes. So mongooses will win.

**Example 2**. The mongoose will eat the snake at position 2 (1-based indexing). One mongoose and one snake will be left. Hence, there will be a tie.

**Example 3**. The mongoose can eat either the snake to its left or to the right. But, it can eat only one of them. Afterwards, there will be a single snake and mongoose. So, it will result in a tie.

**Example 4**. The mongooses can eat at max two snakes. For example, s\*mmm\*sss, where \* denotes the snakes that were eaten by mongooses. After this, we have four snakes and three mongooses. So, the snakes win.

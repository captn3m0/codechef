---
category_name: easy
problem_code: CPLAY
problem_name: 'Penalty Shoot-out'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: shivam496
problem_tester: null
date_added: 28-11-2017
tags:
    - dec17
    - shivam496
editorial_url: 'https://discuss.codechef.com/problems/CPLAY'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514816001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/CPLAY.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/CPLAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/CPLAY.pdf) as well.

 Chef likes to play football with his friends. They played a number of matches and surprisingly, every match was a tie, so they decided to declare the winner with penalty shoot-out. As they didn't know the penalty shoot-out rules, they just decided to take 20 shots alternatively (each team takes 10 shots).

One day, Chef's friend Shivam heard about the matches and got confused. Later Shivam went to Chef and his friends and explained the shoot-out rules. Then, they all decided to calculate and once again declare the winner of each match as per the standard football penalty shoot-out rules.

The standard rules are:

- The teams will take shots alternatively.
- At first, each team will take five penalty shots.
- If one team does not have more goals than the other after these five shots, the shoot-out will proceed to sudden death.
- In between of first 10 kicks, If one team has an advantage over other which can't be compensated, then the team with the advantage will be declared winner at that instant i.e. before the completion of 10 kicks.
- In sudden death, each team will take at most five more shots. Everytime after both teams take a shot, the following rule is used: if one team has scored more goals than the other, that team is the winner.
- If each team has taken 10 shots and the winner still cannot be decided, the result will be a tie.

The result of the shoot-out for each game is given as a binary string where '1' represents GOAL and '0' represents MISS. Chef's team always starts first. Keep in mind that the teams alternate when taking the shots — the first character corresponds to the first shot of Chef's team, the second character to the first shot of the opposing team, the third character to the second shot of Chef's team etc.

As there are many matches to evaluate, Chef and his friends are unable to do so and they require your help. You have to tell them the winner of each match.

If a match ended in a tie, print "TIE". If Chef's team won, print "TEAM-A", otherwise print "TEAM-B". Also, if the match didn't end in a tie, print the minimum number of kicks required to decide the result, so that they can also know how much times they shot in vain.

**Note: Input/Output files are large, use fast reading/writing methods**

### Input

- The input consists of several lines.
- Each line contains the record of the shoot-out for a single match in the form of a binary string where '1' represents GOAL and '0' represents MISS, starting from Chef's team alternatively.

### Output

On each line, print the winner of the corresponding match ("TEAM-A" or "TEAM-B") and the number of shots required to decide the result, separated by a space. If there is no winner, print "TIE" instead.

### Constraints

- each line contains a 20-bit binary string
- **number of matches** ≤ 106

### Subtasks

**Subtask 1 (20 points):**

- the first 10 kicks always result in a tie, i.e. the shoot-out will always go to sudden death
- **number of matches** ≤ 103

**Subtask 2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

10100101111011111111
00000000000000000000
01011101110110101111

<b>Output:</b>

TEAM-A 12
TIE
TEAM-B 7

</pre>### Explanation
**Example case 1:** After 5 turns, the result was a tie and after the 6th turn, the score was 4:3, so Chef's team was the winner and the number of shots required to decide the result was 12.

**Example case 2:** Both teams didn't score any goal, so the match resulted in a tie after 10 turns (20 shots).

**Example case 3:** After 7 shots i.e. 0101110, the score was 1:3. Now, regardless of the following shots, we can say that the winner will always be TEAM-B, so only 7 shots are needed to say that TEAM-B is the winner.

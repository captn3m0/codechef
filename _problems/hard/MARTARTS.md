---
category_name: hard
problem_code: MARTARTS
problem_name: 'Martial Arts'
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
problem_author: thocevar
problem_tester: laycurse
date_added: 21-09-2012
tags:
    - bipartite
    - hard
    - matching
    - nov12
    - thocevar
editorial_url: 'http://discuss.codechef.com/problems/MARTARTS'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493556766
layout: problem
---
All submissions for this problem are available.Chef somehow strayed away from kitchen and got involved in martial arts. He isn't in the right shape to get into fights but he is qualified enough to be a coach in the local gym. He's just been put in charge of organizing an upcoming tournament.

There will be two teams of N fighters participating in the tournament. We will refer to the Chef's team as home team. The other one will be guest team. As the organizer, Chef has to assign all fighters to N fights. One contestant from each team will take part in a fight and the judges will award certain number of points to each fighter's team according to their performance. Team's final score is equivalent to the sum of points which the contestants earned in their fights. Chef has to assign every fighter to exactly one fight.

Chef knows all participants very well and wants to assign pairs in such way that will maximize the difference between home and guest team's score. Let's say that home team will score H and guest team G points. Chef wants to maximize H-G. If he can do that in multiple ways, he would then like to maximize H.

However, he is not the only one with a hidden agenda. After the pairs are announced, guest coach can make up an excuse that one of his contestants got injured. This means that this contestant's fight won't take place and therefore won't contribute to team scores. When deciding whether to cancel some fight and which fight should that be, the guest coach has a similar goal as Chef. His primary goal is to maximize G-H and secondary to maximize G.

Chef is stunned by guest coach's tactic and asks for your help to organize fights optimally.

### Input

The first line contains the number of contestants N in each team. The following N lines describe all possible pairings of contestants. j-th element in i-th line is of the form "Ai,j:Bi,j" which means that home team would get Ai,j points and guest team Bi,j points if i-th contestant from home team fights against the j-th from guest team.

### Output

Output the number of points H scored by home team and the number of points G scored by guest team in an optimally conducted tournament. Separate them by a single space.

### Constraints

- 1 ≤ N ≤ 100
- 0 ≤ Ai,j, Bi,j < 1012

### Example

<pre>
<b>Input:</b>
3
10:7 0:20 6:5
5:5 0:10 8:10
0:0 50:0 100:0

<b>Output:</b>
18 17
</pre>### Explanation

Chef will pair contestants in the following way: (1,1), (2,3), (3,2). Coach of the guest team will cancel the last fight (3,2) which would earn home team 50 points. This way the final score is 18 points for home team and 17 points for guest team.

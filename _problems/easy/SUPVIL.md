---
category_name: easy
problem_code: SUPVIL
problem_name: 'Superheroes and villains'
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
problem_author: pkacprzak
problem_tester: null
date_added: 27-12-2016
tags:
    - basic
    - cakewalk
    - ltime43
    - pkacprzak
time:
    view_start_date: 1483203600
    submit_start_date: 1483203600
    visible_start_date: 1483203600
    end_date: 1735669800
    current: 1493558191
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME43/mandarin/SUPVIL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME43/russian/SUPVIL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME43/vietnamese/SUPVIL.pdf) as well.

In a world of superheroes each person is either a superhero or a villain. It is well known that every superhero has a name ending with either “man” or “woman”, for example “chefman”, “prettywoman” are Superheroes. All other persons are villains, for example “hacker” and “unclejohn".

Currently a big fight between the superheroes and the villains is going to happen. Initially there is only one superhero fighting one villain. Then total of **N** persons joined the fight one after another. If at point of time, there are two more superheroes than villains in the fight, superheroes will win the fight immediately, as they can overwhelm villains with their powers. On the other hand, if there are 3 more villains than superheroes at any time, they will win, because they use dirty tricks to defeat the superheroes. If over all all the fights, none of these cases happen, then the fight is declared to be a draw. For a given list of people joining the fight in the given order, decide which groups wins the fight or whether the fight is ended with a draw.

### Input

In the first line there is a single integer **T** denoting the number of test cases to handle. After that the description of **T** test cases follow.

Description of each test cases starts with a line containing a single integer **N** denoting the number of people joining the fight.

The **i**-th of the following **N** lines contains the name of person joining the fight at time **i**.

### Output

For each test cases, output either "superheroes" if superheroes win the fight, "villains" if villains win or a "draw" if the fight ends with a draw. All of these strings should be outputted without quotes.

### Constraints

- **1 ≤ T ≤ 10**
- Every person's name consists only of English lowercase letters (i.e. from 'a' to 'z') and it is no longer than 15 characters.
- No two persons have the same name.

### Subtasks

**Subtask #1: (30 points)**

- **1 ≤ N ≤ 500**

**Subtask #2: (70 points)**

- **1 ≤ N ≤ 105**

### Example

```
<b>Input:</b>
3  
2   
kittywoman  
wingman  
6  
hacker  
beautywoman  
blackjack  
noname  
watersnake  
strongman  
4  
famousman  
redsnake  
tallwoman  
tinythief  

<b>Output:</b>
superheroes
villains
draw

```
### Explanation

**Example case 1.** As you know that initially a superhero is fighting with a villain. After that, superhero "kittywoman" joins the fight. At this point, there are two superheros and one villain. After that "wingman" joins the fight too. As this point of time, there are three superheros and one villain, so the number of superheros are two more than number of villains, so superheros will win the fight.

**Example case 2.** Other than first two peoople, six more people join the fight. The moment when the fight is decided is after **watersnake** joins the fight, because there are two superheroes fighting five villains, so villains will win.

**Example case 3.** Other than initial two people, four more people join the fight, and there is no moment at which the fight can be decided, so it ends with a draw.
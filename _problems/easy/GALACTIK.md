---
category_name: easy
problem_code: GALACTIK
problem_name: 'Galactik Football'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: jay_adm
problem_tester: gamabunta
date_added: 6-04-2013
tags:
    - disjoint
    - easy
    - jay_adm
    - july13
    - mst
    - union
editorial_url: 'http://discuss.codechef.com/problems/GALACTIK'
time:
    view_start_date: 1373880917
    submit_start_date: 1373880917
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493558148
layout: problem
---
All submissions for this problem are available.**WARNING** Large input/output files. Use faster I/O.

It's Galactik Football time! The Galactik Football Assosiation (GFA) has announced a football tournament between all the teams of all the planets in the galaxy (say **N**). Teams like Snow Kids, Shadows, Xenons, Red Tigers, Wambas, Pirates, etc. are in total enthusiasm and are practising hard to win the cup using their talent and flux.

Each planet of the galaxy has a government. Some governments have a **mutual agreement** between them. If planet **A** has mutual agreement with planet **B**, then there is a **bidirectional** **spaceway** between **A** and **B** using which anybody can go from **A** to **B** and **vice-versa**. People can use these spaceways to travel from one planet to another, if there exists a **path** between them using some of the spaceways.

Each planet has it's own football ground. The GFA has planned the matches in such a way that a team can have a match at any of these grounds. The GFA has come across some problems in the execution of their plan. They have found out that there are many pairs of planets between which there **does not exist any path**, so the football team of one of those planets can't reach the other planet. They requested the corresponding governments to make a spaceway between them, but because of absense of mutual agreement (duhhh.. Politics!), these goverment did not agree. So the GFA suggested that they will make teleports between some pairs of planets which will be used only by the football teams to travel.

But there are two types of governments in the galaxy
**1.** Some of the governments are greedy (duhhh..). They want to make money (You don't say!) throught the GFA. So each of these government has asked the GFA for a tax value which it has to pay if it wants to make a teleport ending at their planet.

**2.** Others want to sponser the event, so they will give money to the GFA if they make a teleport ending at their planet (That's new..). The GFA would always avoid such governments no matter what the consequences are, because these kind of governments have always some dirty plans in their minds for the GFA.

Now, the GFA wants to make bi-directional teleports between planets such that the football teams of any planet can reach any other planet to play a football match, using spaceways between the planets and/or teleports made by the GFA.

The GFA also has financial problems and want to spend as little money as possible. They have come to you so that you can help them calculate the minimum ammount of money needed to fulfill their plan.

### Input

The first line of the input consists of two integers - **N** and **M**. **N** is number of planets and **M** is number of pairs of planets which have a mutual agreement, i.e they have a spaceway between them. Then, **M** lines follow, each containing two space separated integers **A** and **B**, denoting a mutual agreement and hence a spaceway to travel, between plenet **A** and planet **B**. Then, **N** lines follow. The **ith** line has an integer **C**. If **C ≥ 0**, then it represents the tax value which the GFA has to pay to the government of planet i (it's a **type 1** government). If **C < 0**, then it represents the money the ith government will pay to the GFA (it's a **type 2** government).

### Output

Print the minimum amount needed for the GFA to fulfill their plan if it can be fulfilled, else print "-1" (without quotes).

### Constraints

**1 ≤ N ≤ 100,000**
**0 ≤ M ≤ 1,000,000**
**0 ≤ |C| ≤ 10,000**
**1 ≤ A,B ≤ N**
**A ≠ B**

### Sample

<pre>
<b>Input 1</b>
6 6
1 2
2 3
1 3
4 5
5 6
4 6
1
3
5
2
4
6

<b>Output 1</b>
3


<b>Input 2</b>
3 1
2 3
1
-1
-1

<b>Output 2</b>
-1


</pre>
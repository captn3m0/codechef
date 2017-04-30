---
category_name: hard
problem_code: RANKA
problem_name: Ranka
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
problem_author: cgy4ever
problem_tester: shiplu
date_added: 12-12-2014
tags:
    - cgy4ever
    - graph
    - jan15
    - medium
editorial_url: 'http://discuss.codechef.com/problems/RANKA'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493556808
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/RANKA.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/RANKA.pdf).

There is an ancient legend in China called [Ranka](http://en.wikipedia.org/wiki/Ranka_(legend))

(Content taken from [wikipedia](http://en.wikipedia.org/wiki/Ranka_(legend))) 
Wang Chih was a hardy young fellow who used to venture deep into the mountains to find suitable wood for his axe.
One day he went farther than usual and became lost. He wandered about for a while and eventually came upon two strange old men
who were playing Go, their board resting on a rock between them. Wang Chih was fascinated. He put down his axe and began to watch.
One of the players gave him something like a date to chew on, so that he felt neither hunger nor thirst. As he continued to watch he
fell into a trance for what seemed like an hour or two. When he awoke, however, the two old men were no longer there.
He found that his axe handle had rotted to dust and he had grown a long beard. When he returned to his native village he discovered
that his family had disappeared and that no one even remembered his name.

So how could that happen? Well, that's because the game "Go" can played very long.

Let's first define the game "Go":

In this game, we focus on the game played on a 9x9 board. It is a game played by 2 players.
A plays black stone while B plays white. They play alternatively. A goes first.
In each cell there can be 3 states: empty, having 1 black stone and having 1 white stone.

If we link the same color stones which are neighbourhood (|x1-x2| + |y1-y2| = 1), we can get some connected component.
We say a connected component is dead if no stone in it has an empty neighbourhood cell.

In each move, the player must put the stone on an empty cell or pass the turn. If this player put a stone, following situation will
happen.


10. If after this move there is at least one connected component of opponent dead, then stones from these dead components
  will be removed. (In this case, after remove all dead components of your opponent, we can prove all your connected component are not dead.)
11. Otherwise, if there are at least one connected component of yours dead, then this move is invalid.
In order to avoid infinite loops, there is a rule called "No same state". The state of board can be expressed as a string with length 82:
the first character indicate who is the next player, then 9\*9 character indicate the state of a certain cell. If after one move the game
goes into a state that previously occurred, then this move is invalid.

You are given an integer N. Please output a match that contains N valid moves for both player.

You can find details for the rules in the judge program
[here](https://codechef_shared.s3.amazonaws.com/download/RANKA_JUDGE.cpp).

### Input

Only line of input will contain an integer denoting **N**.

### Output

You must output N lines.
If the player uses "pass" at that step, then output "0 0", otherwise output the coordinate "x y" where 1 ≤ x,y ≤ 9.

### Constraints and Subtasks

- Subtask1 (20 points) : **N = 5000**
- Subtask2 (80 points) : **N = 10000**

### Example

```
<b>Input:</b>
12

<b>Output:</b>
1 1
2 1
2 2
1 2
1 3
2 3
1 1
3 2
0 0
1 2
9 9
2 2

```
### Examples

Here are some examples: 
You can see the image at this [link](/download/extimages/dff1e253b0a327c9f60f79ec80e10fb1.png) if itis not properly visible in your browser.

![](/download/extimages/dff1e253b0a327c9f60f79ec80e10fb1.png)
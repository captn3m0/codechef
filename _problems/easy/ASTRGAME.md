---
languages_supported:
    - NA
title: ASTRGAME
category: NA
old_version: true
problem_code: ASTRGAME
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Teddy and Tracy like to play a game based on strings. The game is as follows. Initially, Tracy writes a long random string on a whiteboard. Then, each player starting with Teddy makes turn alternately. Each turn, the player must erase a contiguous substring that exists in the dictionary. The dictionary consists of *N* words.

Of course, the player that can't erase any substring in his turn loses the game, and the other player is declared the winner.

Note that after a substring R is erased, the remaining substring becomes separated, i.e. they cannot erase a word that occurs partially to the left of R and partially to the right of R.

Determine the winner of the game, assuming that both players play optimally.

### Input

The first line contains a single integer *T*, the number of test cases. *T* test cases follow. The first line of each testcase contains a string *S*, the string Tracy writes on the whiteboard. The next line contains a single integer *N*. *N* lines follow. The *i*-th line contains a single string *wi*, the *i*-th word in the dictionary.

### Output

For each test case, output a single line containing the name of the winner of the game.

### Example

<pre>
<b>Input:</b>
3
codechef
2
code
chef
foo
1
bar
mississippi
4
ssissi
mippi
mi
ppi

<b>Output:</b>
Tracy
Tracy
Teddy
</pre>
### Constraints

- 1 &lt;= *T* &lt;= 5
- 1 &lt;= *N* &lt;= 30
- 1 &lt;= |*S*| &lt;= 30
- 1 &lt;= |*wi*| &lt;= 30
- *S* and *wi* contain only characters 'a'-'z'

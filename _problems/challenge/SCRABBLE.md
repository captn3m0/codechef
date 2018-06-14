---
category_name: challenge
problem_code: SCRABBLE
problem_name: 'Scrabble on a Graph'
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
    - SCALA
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
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: iscsi
date_added: 25-09-2015
tags:
    - challenge
    - nov15
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SCRABBLE'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1525454422
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/SCRABBLE.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/SCRABBLE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/SCRABBLE.pdf) as well.

Let's play [Scrabble](https://en.wikipedia.org/wiki/Scrabble) on a graph!

There are **K** tiles. Each of the tiles either contains a single uppercase Latin letter or is a blank tile — meaning that it can represent any uppercase Latin letter.

Given is also a graph with **N** nodes and **M** edges. Initially, some of the nodes contain tiles. The rest of the nodes are unoccupied.

Your goal is to construct words from the tiles, by placing them on the unoccupied nodes of the graph. You need to play a number of correct turns - it is completely up to you, how many turns to play.

Each turn consists of placing at least one of the tiles on some node of the graph which currently has no tile. Then, you need to construct a path in this graph that contains **at least one of the just placed tiles** such that the string obtained by writing out the letters from the nodes on this path (and previously replacing blank tiles with arbitrary Latin letters) is included in the provided dictionary of **existing English words**. You can't play one word twice, though the same blank tile can represent different letters in different turns.

Moreover, each node has its own _multiplier value_, denoting the value by which the score of the placed tile will be multiplied anytime this node participates in the creation of a word.

The score you get for the turn will be equal to the sum of the scores for every tile used in the construction of the word, each multiplied by the _multiplier value_ of the corresponding node. The number of points for each letter is based on the letter's frequency in standard English writing and will be listed below; commonly used letters such as vowels are worth one point, while less common letters score higher, goign up to **10** points each for Q and Z.

You need to get as many points as possible in total, in the end (by the last of your output moves). For making game more interesting, you will be aware only of the first **min(20, number\_of\_remaining\_letter\_tiles)** letter tiles in the initially shuffled letter tiles queue.

### The frequency of the letter tiles and corresponding scores

- **0 points**: 2% of the total number of the tiles
- **1 point**: E × 12%, A × 9%, I × 9%, O × 8%, N × 6%, R × 6%, T × 6%, L × 4%, S × 4%, U × 4%
- **2 points**: D × 4%, G × 3%
- **3 points**: B × 2%, C × 2%, M × 2%, P × 2%
- **4 points**: F × 2%, H × 2%, V × 2%, W × 2%, Y × 2%
- **5 points**: K × 1%
- **8 points**: J × 1%, X × 1%
- **10 points**: Q × 1%, Z × 1%

In order to ensure that the number of tiles of each type will be integral, the total number of tiles will always be divisible by **100**.

### Input

The first line of the input contains an integer **D** denoting the number of words in the dictionary.

Each of the following **D** lines contains a string of uppercase Latin letters, denoting a dictionary word. The dictionary in each test case (except the sample one) will be the same as SOWPODS. You can download it [here](http://www.codechef.com/download/NOV15/SCRABBLE.txt).

The following line contains two space separated integerd **N** and **M**, denoting the number of the nodes and edges in the game graph.

The following line contains **N** space separated integers, where the **i**th of them denotes the _multiplier value_ of the **i**th node.

The next line contains **N** characters. The **i**th of these characters is either a dot (character ".", ASCII code 46), in case there is no letter written in the **i**th node, or an uppercase latin letter - in case this letter is written in the **i**th node, or a dash (symbol "\_", ASCII code 95) in case there is a blank tile on the corresponding node.

Each of the following **M** lines contain a pair of space separated integers **Xj** and **Yj**, denoting that there is a bidirectional edge connecting the nodes numbered **Xj** and **Yj**.

The following line contains a string **S** of **min(20, number-of-remaining-letter-tiles)** uppercase latin letters and dashes (symbol "\_", ASCII code 95), denoting the tiles that you currently have.

### Output

Output a few blocks, describing the moves. After the last move description, output **-1** on the separate line.

In the first line of the block describing a move, output **C** - the number of nodes where you will put the tiles during this move. **C** should be positive, otherwise you will get a _wrong answer_ verdict.

Then, output **C** lines, each should contain a single-space-separated uppercase an integer and an uppercase Latin letter or a dash, denoting the tile you'll put and the node where you'll put it. In case there is no such tile currently, or you put a tile to the node that already has a tile in it, you will get a _wrong answer_ verdict.

The following line should contain a single integer **L**, denoting the number of letters in the word you'll construct. If **L** is not positive, you will get a _wrong answer_ verdict.

The following line should contain **L** space separated integers, denoting a correct path in the graph which forms a word that has never been formed before. As you may have noted, **the path doesn't have to be simple** If these integers don't represent a correct path, or none of the newly placed tiles is used, you will get a _wrong answer_ verdict.

The following line should contain a string of **L** uppercase Latin letters, denoting the word you want to play now. In case this is not a dictionary word, or this word had already been played, or the provided path doesn't correspond to this word, you will get a _wrong answer_ verdict.

Finally, if all the requirements are met, you will get an _accepted_ verdict.

Pay attention that you're allowed to play the same blank tile differently in different moves. Also, you should use at least one node among those you've just put a tile on.

### Interactivity details

This is an **interactive** challenge problem, so after you output the description of the corresponding move, flush the output buffer. In C++ you can do it with **fflush(stdout);** routine.

After you do it, you'll receive a new string **S**, where the used letters will be replaced with the next ones.

### Constraints

The test cases for the problem are divided into **4** groups, each containing **5** test cases.

Group 1:

- **1** ≤ **N** ≤ **104**
- **M** = **N-1**
- Two nodes (say, the **i**th and the **j**th one) are connected iff **|i-j|=1**.
- **K** = **104**
- Initially all nodes doesn't contain tiles.

Group 2:

- **1** ≤ **N** ≤ **104**
- **M** = **N-1**
- Two nodes (say, the **i**th and the **j**th one) are connected iff **|i-j|=1**.
- **K** = **104**

Group 3:

- **1** ≤ **N** ≤ **105**
- **M** = **N-1**
- The given graph is a tree.
- **K** = **105**

Group 4:

- **1** ≤ **N** ≤ **105**
- **N-1** ≤ **M** ≤ **105**
- The given graph is connected.
- **K** = **105**

Moreover, in all test cases:

- **1** ≤ multiplier of any node ≤ **10**

### Test Cases Generation

In each test case we will give you randomly generated graph. 0 to 5% of nodes of this graph will be filled with tiles, with the rest being unoccupied.

The string **T** consists of **K** symbols, each of which is either a uppercase Latin letter, or a dash denoting a wildcard tile. The frequency of each symbol is given above. The symbols of **T** are mixed randomly.

Then, some prefix of **T** with length between 0 and **N\*0.05** is chosen, and the tiles from this prefix are put onto some random set of nodes - each tile from the prefix will be put onto some node of the graph and no two tiles will be put on the same node. Then, this prefix is removed from **T**.

The string **S** at any time is represented by the first unused **min{20, |T|}** tiles of **T**. When some tile is used, its' first occurrence is removed from the string **T**, so in the next turn, the first **min(20, |T|)** symbols are output as **S** again.

### Scoring

The score your solution will get for the test cases is equal to the sum of the scores your solution gets at all the turns.

The total score of your solution is the sum of the scores for all the test files. During the contest, scores only for one test case per group (so, in total, at 4 test cases) are reported.

### Example

<pre><b>Initial input:</b>
<tt>2
ABCDEF
GHIJKL
15 14
9 8 7 6 5 4 3 2 1 10 1 2 3 4 5
...............
1 2
2 3
3 4
4 5
5 6
6 7
7 8
8 9
9 10
10 11
11 12
12 13
13 14
14 15
ABCDEFGHIJKLMNOPQRST</tt>

<b>First output:</b>
<tt>6
1 G
2 H
3 I
4 J
5 K
6 L
6
1 2 3 4 5 6 
GHIJKL</tt>

<i>This means, you will play a string <b>GHIJKL</b>. Then, after you flush the output buffer, you will get a new string S:</i>

<tt>ABCDEFMNOPQRSTUVWXYZ</tt>

<b>Next possible output:</b>
<tt>6
7 A
8 B
9 C
10 D
11 E
12 F
6
7 8 9 10 11 12
ABCDEF
-1</tt>

</pre>### Explanation

Let's calculate the scores for two words you've played.

Word **GHIJKL**:

59. Letter G is at the node 1, thus, it gives the score of **9 × 2 = 18**
60. Letter H is at the node 2, thus, it gives the score of **8 × 4 = 32**
61. Letter I is at the node 3, this it gives the score of **7 × 1 = 7**
62. Letter J is at the node 4, thus, it gives the score of **6 × 8 = 48**
63. Letter K is at the node 5, thus, it gives the score of **5 × 5 = 25**
64. Letter L is at the node 6, this it gives the score of **4 × 1 = 4**.
So the total score for this turn is **18 + 32 + 7 + 48 + 25 + 4 = 134**

Word **ABCDEF**:

- Letter A is at the node 7, this it gives the score of **3 × 1 = 3**.
- Letter B is at the node 8, this it gives the score of **2 × 3 = 6**.
- Letter C is at the node 9, this it gives the score of **1 × 3 = 3**.
- Letter D is at the node 10, this it gives the score of **10 × 2 = 20**.
- Letter E is at the node 11, this it gives the score of **1 × 1 = 1**.
- Letter F is at the node 12, this it gives the score of **2 × 4 = 8**.

So, the total score for this turn is **3 + 6 + 3 + 20 + 1 + 8 = 41**

The score for the whole game is equal to **134 + 41 = 175**. This is the score you will get for this output.

### Example #2

<pre><b>Initial input:</b>
<tt>2
SING
SINGINGS
5 5 
1 2 3 4 5
.....
1 2
2 3
3 4
4 5
4 2
GGIINNSS</tt>

<b>First output:</b>
<tt>4
1 S
2 I
3 N
4 G
4
1 2 3 4
SING</tt>

<i>This means, you will play a string <b>SING</b>. Then, after you flush the output buffer, you will get a new string S:</i>

<tt>GINS</tt>

<b>Next possible output:</b>
<tt>1
5 S
8
1 2 3 4 2 3 4 5
SINGINGS
-1</tt>

<i>The path doesn't have to be simple.</i>

</pre>
---
category_name: challenge
problem_code: MINESWPR
problem_name: Minesweeper
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 13-02-2013
tags:
    - ad
    - bfs
    - challenge
    - interactive
    - march13
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/MINESWPR'
time:
    view_start_date: 1363000559
    submit_start_date: 1363000559
    visible_start_date: 1363000281
    end_date: 1735669800
    current: 1525199668
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Note: This is an interactive problem. Interactive problems differ from classic problems in that your solution will send and receive data from a special judge program instead of from static files. Pay special attention to the notice on output buffering described in the "Input + Output" section below.

An **N × N** field contains many mines. Each mine occupies some cell of the field. Each cell could contain at most one mine. There are **M** mines in all at the field. You need to neutralize all of the mines so it will be safe to pass through. The mines are neutralized with dynamite. A single piece of dynamite can be used to neutralize a single cell. You have only **K** pieces of dynamite. But don't worry, it is guaranteed that **K ≥ M**.

You may perform two operations:

- **N**eutralize - neutralize the mine in the specified cell, if one exists. Otherwise has no effect. This operation may be performed at most **K** times.
- **S**urvey - check a cell for a mine, and if it doesn't have a mine count the number of cells adjacent to it containing mines. Previously neutralized mines are not counted. Each cell is adjacent to up to 8 other cells (2 horizontally, 2 vertically, and 4 diagonally). This operation may be performed at most **N**2 times. But you could survey the same cell twice if necessary and also it is allowed to survey the cell after neutralize operation was applied to it.

Surveying is very dangerous, so you need to try to minimize the number of survey operations you perform. Submissions that use fewer survey operations will score more points.

### Input + Output

Input begins with the line containing 3 space separated integers **N**, **M**, and **K**, the size of the field, the number of mines, and the number of pieces of dynamite, respectively. The locations of mines are predetermined but currently unknown to you.

To perform a neutralize operation, print a line containing "N x y" (without quotes), where **x** and **y** are the coordinates of the cell you wish to neutralize (0 ≤ **x**, **y** &lt; **N**).

To perform a survey operation, print "S x y" (without quotes), where **x** and **y** are the coordinates of the cell you wish to check (0 ≤ **x**, **y** &lt; **N**). Then read a line containing a single character. This character will be 'M' if the cell contains a mine, otherwise it will be an integer between 0 and 8, indicating the number of cells adjacent to the specified cell that contain mines.

When you are finished, print "Done" (without quotes).

Note that you will receive Wrong Answer verdict if one of the following happens:

- You will perform more than **N2** survey operations.
- You will perform more than **K** neutralize operations.
- You will output operation in wrong format.
     In particular, **x** and **y** should be between 0 and **N − 1**, inclusive.
- You will output "Done" but not all mines are neutralized.

*Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.*
 For example, at C/C++ you could use the following routines:

<pre>char Survey(int x, int y) {
    printf("S %d %d\n", x, y);
    fflush(stdout);
    char res;
    scanf(" %c", &res);
    return res;
}

void Neutralize(int x, int y) {
    printf("N %d %d\n", x, y);
    fflush(stdout); /* but it is not necessary here */
}

</pre>
### Scoring

Suppose you successfully neutralized all mines using **S** survey operations.
 Then your score is **10 \* (S + 1) / N2**. Lower scores will earn more points.

### Sample Input + Output

<pre>In:  4 2 3
Out: S 0 0
In:  0
Out: S 2 3
In:  2
Out: S 1 2
In:  M
Out: N 1 2
Out: S 2 3
In:  1
Out: S 3 2
In:  1
Out: N 2 2
Out: N 3 3
Out: Done

</pre>
### Explanation

The mines are located at (1, 2) and (3, 3). The operations proceed as follows:

- Survey (0, 0). This cell does not contain a mine, nor do any of its 3 neighbors ((0, 1), (1, 0) and (1, 1)), so the result is "0".
- Survey (2, 3). This cell does not contain a mine, but 2 of its 5 neighbors contain mines, so the result is "2".
- Survey (1, 2). This cell contains a mine. The survey result is "M".
- Neutralize (1, 2). Destroy the mine in the cell (1, 2).
- Survey (2, 3). This cell was surveyed before, however the mine in (1, 2) has now been neutralized, so only one mine remains and the result is "1".
- Survey (3, 2). This cell is adjacent to the remaining mine.
- Neutralize (2, 2). This cell does not contain a mine, but we have a spare piece of dynamite so it's okay to neutralize this cell unnecessarily.
- Neutralize (3, 3). Destroy the last mine in the cell (3, 3).
- Done. All of the mines have now been neutralized.

Note that the above sequence of operations is also consistent with the mines having been located at (1, 2) and (2, 2). This sample performs 5 survey operations, and therefore would score **10 \* (5 + 1) / 42 = 3.75**.

### Test Case Generation

**N** is chosen randomly and uniformly between 30 and 50, inclusive. A real number **P** is chosen randomly and uniformly between 0.1 and 0.3, inclusive. Each cell is independently chosen to contain a mine with probability **P**. Then **M** is set to be the number of mines on the generated field. With 50% probability, **K** is chosen to be equal to **M**. Otherwise, **K** is chosen randomly and uniformly between **M** and **N**2/2, inclusive.

*Note: The locations of the mines are not guaranteed to be the same across multiple submissions, however **N**, **M**, and **K** will be the same for each official input file across all submissions.*

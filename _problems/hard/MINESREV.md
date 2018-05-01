---
languages_supported:
    - NA
title: MINESREV
category: NA
old_version: true
problem_code: MINESREV
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are probably familiar with the classic computer game called Minesweeper. In case you're not, here's a short description. The game is played on a rectangular grid with R rows and C columns. Some cells contain mines and the others are empty. Initially, all cells are closed - their content is hidden. A player has to open all empty cells without opening a cell which contains a mine. You can open a cell by clicking on it. Opening an empty cells displays a number of mines in the neighbouring 8 cells. In case there aren't any mines in the neighbourhood, all neighbouring cells are automatically opened. This way you can open large mine-free areas with a single click.

As the name of this problem suggests, you will be dealing with a reversed process of minesweeping. A player starts with a grid where all cells are open and are either empty or contain a mine. The goal of this reversed game is to hide the mines by closing all cells as fast as possible. There are two ways to close a cell. You can either click on it or the cell can automatically close as a result of clicking on some other cell. Clicking on a cell C1 closes all cells C2 which could open simultaneously with C1 in a normal game of Minesweeper (as a result of a single click somewhere on the grid). More formally, let Sx,y be a set of all cells which are opened when you click on the cell (x,y) in a normal game of Minesweeper. Clicking on a cell C1 will also close all cells C2 such that there exists a set Sx,y which contains both C1 and C2. You can safely click on a mine cell to close it. The goal is to close all cells with as few clicks as possible.

### Input

The first line contains a single integer T, the number of test cases. The first line of each testcase contains number of rows R and number of columns C. Following lines describe the playing grid. '.' represents an empty cell and '\*' indicates a mine.

### Output

Output a single line containing the minumum number of clicks necessary to close all cells.

### Constraints

- 1 <= T <= 50
- 1 <= R,C <= 50

### Example

<pre>
<b>Input:</b>
2
3 8
**...*..
.....*..
...***..
2 1
*
*
<b>Output:</b>
9
2
</pre>
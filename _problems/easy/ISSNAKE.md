---
category_name: easy
problem_code: ISSNAKE
problem_name: 'Is It a Snake'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 26-05-2017
tags:
    - admin2
    - dfs
    - easy
    - snackdown
    - snckpa17
editorial_url: 'https://discuss.codechef.com/problems/ISSNAKE'
time:
    view_start_date: 1495992600
    submit_start_date: 1495992600
    visible_start_date: 1495992600
    end_date: 1735669800
    current: 1497284090
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPA17/mandarin/ISSNAKE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPA17/russian/ISSNAKE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPA17/vietnamese/ISSNAKE.pdf) as well.

One day I was visiting a temple in which snakes were worshiped. I happened to find a golden plate of dimension 2 \* **n** in it. It had 2 rows of **n** cells each, and so the total number of cells is 2 \* **n**. Each cell of the plate was either white or black, denoted by '.' and '#' respectively. Legend says that a snake was lying on this plate for many years and prayed. So, the cells that were covered by its body have turned black, the rest of the cells were white. Its entire body was supposedly on this plate. Also, you know that a snake likes to make itself comfortable, so none of its parts will be intersecting with its other parts.

Usually, I am skeptical of such legends. So, I want to check for myself whether the legend could potentially be true or not. For example, consider the golden plate given below:

<pre><tt>
##
##
</tt>
</pre>Now, the legend could be true. A snake can be on it, and one possible configuration is as follows. The head of the snake is at (1, 1), then the next portion at (1, 2), then at (2, 2) and then the finally the tail at (2, 1). Notice that the parts of the snake can be adjacent only if the corresponding cells have a common side. ```
<tt>
##.#..
.###..
</tt>
<pre>There can be a snake on the plate above.

</pre><tt>
##.##
.#.#.
</tt>
<pre>The legend is surely false if the plate is as above. These are not marks of a single snake. There could be more than one possible snakes here. But not a single snake.

Given the description of the plate, figure out if the legend could be true, or if it is definitely false.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **n**.

The next two lines each contain **n** characters denoting the rows of the plate.

### Output

For each test case, output a single line containing "yes" or "no" (without quotes) corresponding to the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ 500
- 1 ≤ **n** ≤ 500
- There will be at least one cell containing the character '#'

### Example

</pre><tt>
<b>Input</b>
6
2
##
..
2
##
.#
2
#.
.#
7
#.###..
#######
6
##.#..
.###..
5
##.##
.#.#.

<b>Output</b>
yes
yes
no
no
yes
no
</tt>
<pre>
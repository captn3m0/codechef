---
{"category_name":"hard","problem_code":"LALALANT","problem_name":"The Fools Who Dream","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"25-12-2019","tags":{"0":"kevinsogo"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LALALANT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
My ant used to live in Paris. But now, he lives in La La Land, because of lower rents. There's only one disadvantage in living there: traveling in La La Land is a nightmare. 

La La Land is a rectangular grid with dimensions $r\times c$ ($r$ rows, $c$ columns). Each cell can only have one of three colors: **black**, **red**, and **white**. And as you know, ants are colored either **black** or **red**. But because the mayor of La La Land is a bit crazy, he requires every walking ant in La La Land to follow these rules:

- A walking ant must always be facing in one of the four cardinal directions: north, south, east and west.
- A walking ant that goes into a **white** cell must keep walking forward, not changing directions. 
- A walking ant that goes into a non-white cell with the **same color** as itself must turn left 90 degrees exactly once, and then keep walking forward.
- A walking ant that goes into a non-white cell with a **different color** from itself must turn right 90 degrees exactly once, and then keep walking forward.
- A walking ant that goes off the grid is foolish. It is very hard to go back into La La Land without tons of paperwork, so we can assume that a walking ant that goes off the grid will stay outside the grid forever.

As you can see, once an ant begins walking, it doesn't really have any choice. The ant's path is fully determined by the grid.

My ant is a black ant, and he wants to build a **house** in one of the cells in La La Land, and live there with his friend, which is a red ant. They also want to build their **garage** in one of the cells. The mayor has additional rules regarding houses and garages:

- There must be exactly one house and one garage.
- The cells containing the house and the garage must be different.
- The cells containing the house and the garage must be white cells.
- The house must have exactly one door, and it must point in one of the four cardinal directions. Thus, any walking ant leaving the house will be facing in that direction.

Luckily, the garage can be entered from any direction, and the house and the garage cells don't have to be adjacent to each other.

Furthermore, my ant and his friend behave in the following way:

- If they reach the cell containing the house again, they just keep walking forward (since that cell is white). Note that this is not considered as "walking out of the house", so in particular, they will keep their current direction and not switch to the direction of the door.
- _As soon as_ they reach the cell containing the garage, they immediately stop walking. (They will then ride their car. Yes, these ants are rich.)

My ant, which is a black ant, has a *special* subset $B$ of the cells that he wants to visit every time he walks out from his house. His friend, which is a red ant, also has a *special* subset $R$ of the cells that she wants to visit every time she walks out from her house. They may optionally visit other cells outside their *special* subset, but they must visit all cells in their *special* subset. Also, they must end their walk at the garage. 

You are friends with the mayor, and so you managed to talk him into changing the colors of the cells for you. The mayor has given you complete freedom to choose the color of every cell in the grid with only one restriction: since the mayor is a red ant, he doesn't like black, so he requires the final grid to have at most $11$ black cells.

Help my ant and his friend achieve their dream, foolish as they may seem, by choosing the coloring of the grid (subject to the mayor's restriction), choosing the locations of the house and the garage, and choosing where the door of the house points to. Or, if it is impossible, say so as well.

"A bit of madness is key  
to give us new colors to see.  
Who knows where it will lead us?  
And that's why they need us."


### Input

The first line contains $T$, the number of test cases. The following lines describe the test cases.  

The first line of each test case contains four space-separated integers $r$, $c$, $|B|$ and $|R|$, where $|B|$ and $|R|$ denote the sizes of $B$ and $R$, respectively.  
Each of the next $|B|$ lines contains two space-separated integers $i$ and $j$ denoting that the cell at row $i$ and column $j$ is in $B$.  
Each of the next $|R|$ lines contains two space-separated integers $i$ and $j$ denoting that the cell at row $i$ and column $j$ is in $R$.  

### Output

For each test case, first output a single line containing either `POSSIBLE` (if it is possible) or `FOOLISH` (if it is impossible). In addition, if it is possible, you need to output at least one valid coloring. Output $r$ more lines, each containing a string of length $c$ whose letters are one of the following:

- `B` denoting a black cell;
- `R` denoting a red cell;
- `W` denoting a white cell;
- `G` denoting a white cell containing the garage;
- `^` denoting a white cell containing a house with door pointing north;
- `v` denoting a white cell containing a house with door pointing south;
- `(` denoting a white cell containing a house with door pointing west;
- `)` denoting a white cell containing a house with door pointing east.

We assume that north is up, south is down, west is left, and east is right. Note that:

- There must be exactly one cell containing `G`. 
- There must be exactly one cell containing one of the characters `^`, `v`, `(` or `)`. 
- There must be at most $11$ cells containing `B`. 

There may be multiple possible answers; any one will be accepted.

### Constraints 

- $1 \leq T \leq 10^5$  
- $1 \le r, c \le 150$  
- $1 \le i \le r$  
- $1 \le j \le c$  
- $0 \le |B|, |R| \le 500$  
- The sum of the $rc$ in a single file is $\le 5\cdot 10^6$  
- The sum of the $|B|$ in a single file is $\le 10^6$  
- The sum of the $|R|$ in a single file is $\le 10^6$  

### Sample Input

    3
    6 11 5 3
    5 5
    5 8
    5 9
    6 8
    6 9
    1 5
    3 2
    4 9
    7 5 4 3
    6 1
    4 2
    5 2
    7 2
    3 5
    5 2
    7 2
    2 2 1 1
    1 2
    2 1


### Sample Output

    POSSIBLE
    WWWBWWWBWWR
    WRWWWWWWWBW
    W)WRWWBWWWR
    WWWWBBRRWGR
    WWWBWWWWRRR
    WBWWRWRRRRR
    POSSIBLE
    RWWRW
    RWBRB
    WBBWB
    WWWBW
    BR^WB
    WWWWB
    BGBWW
    FOOLISH

### Explanation  

Here's an illustration of the output for the first two test cases.

![Illustration of the first two sample outputs](https://s3.amazonaws.com/codechef_shared/uploads/2019/AR/1.png?fbclid=IwAR24M2Vmb95kVBw-efGbt5qpUXaAn0I6DwcXhhQfPMjYDJQ8RoPqazxHIrY =570x230 "Here's to the mess we make")

Note that there are other valid solutions.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
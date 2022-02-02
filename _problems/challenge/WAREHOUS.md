---
{"category_name":"challenge","problem_code":"WAREHOUS","problem_name":"Warehouseman (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"mgch","date_added":"8-05-2018","tags":{"0":"pieguy"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/WAREHOUS.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/WAREHOUS.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/WAREHOUS.pdf" target="_blank">Vietnamese</a> as well.</h3>

In order to save money, Chef has started buying bulk shipments of shelf-stable foods when they're on sale, then storing them in a warehouse until needed. This saves a lot of money, but Chef is having trouble managing the warehouse and needs your help getting shipments in and out of it.

Chef's warehouse is a grid with $R$ rows and $C$ columns. There is a single entrance to the warehouse in the northwest corner. Rows run from west to east and columns run from north to south, so e.g. north is the direction of decreasing row number.

A single forklift is used to move shipments around the warehouse. The forklift occupies one cell in the warehouse (initially, the northwest corner cell), and each shipment also occupies one cell in the warehouse. The forklift can carry up to one shipment at a time, and while carrying a shipment, the forklift and that shipment occupy the same cell. The forklift can move in any of the four cardinal directions, but it must stay in the warehouse and cannot occupy the same cell as a shipment it does not currently carry. When the forklift is not carrying a shipment, it can pick up a newly arrived shipment from the entrance (such a shipment does not occupy any cell until it is picked up), or it can load a shipment from an adjacent cell. When the forklift is carrying a shipment, it can drop it off at the entrance (a shipment does not occupy any cell after being dropped off) or unload it to an adjacent empty cell.

There are $R\cdot C - 1$ shipments numbered $1$ through $R\cdot C - 1$. The shipments will arrive in some order given on the input, and they must be picked up in this order and placed into the warehouse one at a time. Then, the shipments must be retrieved from the warehouse and dropped off at the entrance, in the order from $1$ to $R\cdot C - 1$. You must produce a sequence of instructions for the forklift operator. The shorter the sequence of instructions you produce, the better.

The types of forklift instructions are as follows:
- **'N'**, **'W'**, **'S'**, **'E'**: Move one cell north, west, south, or east, respectively. The destination cell must be inside the warehouse and must not contain any shipment.
- **'P'**: Pick up a shipment. The forklift must be at the warehouse entrance and it must not be currently carrying a shipment. After performing this instruction, the forklift will be currently carrying the shipment it picked up — the next element from the sequence of incoming shipments. This instruction cannot be performed after all arriving shipments have been picked up.
- **'D'**: Drop off a shipment. The forklift must be at the warehouse entrance and it must be carrying a shipment. This instruction cannot be performed before all incoming shipments have been picked up or after all shipments have been dropped off. A dropped off shipment cannot be picked up.
- **"Lx"**: Load a shipment from a side-adjacent cell. The character $x$ must be one of 'N', 'W', 'S', 'E', and it indicates the direction of the cell to load the shipment from. For example, to load a shipment from the cell to the north of the forklift, use 'LN'. The forklift must not be currently carrying a shipment and there must be a shipment at the specified cell. The forklift remains in its current cell after this instruction, but is now carrying the shipment it loaded.
- **"Ux"**: Unload a shipment to a side-adjacent cell. The character $x$ must again be one of 'N', 'W', 'S', 'E', and it indicates the direction of the cell to unload the shipment to. For example, to unload a shipment to the cell to the north of the forklift, use 'UN'. The forklift must be currently carrying a shipment and there must not be a shipment at the specified cell. The forklift remains in its current cell after this instruction, but the unloaded shipment is now in the specified cell.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $R$ and $C$.
- The second line contains $R\cdot C - 1$ space-separated integers — a permutation of the numbers $1$ through $R \cdot C - 1$ denoting the order in which the shipments arrive.

### Output
For each test case, print a single line containing one string — the concatenation of all your instructions for the forklift operator. The length of this string must not exceed $500,000$ characters. Your answer will be considered correct if by following your instructions, the forklift picks up all the shipments and then drops them off in the correct order, returning to the northwest corner.

It is guaranteed that a valid sequence of instructions always exists under the given constraints.

### Constraints 
- $T = 5$
- $6 \le R,C \le 20$
- the last shipment to arrive is not shipment number $1$

### Example Input
```
1
2 3
3 1 2 4 5
```

### Example Output
```
PSEUENWPUSPEUSWPEUEWLSUEPUSLEDELSWDESLENWDELEWDLSD
```

### Explanation
Note that the example input does not conform to the constraints, but it does not appear in the actual test data.

**Example case 1:** Let us denote the northwest corner cell by $(0,0)$ and the southeast corner cell by $(2,1)$. The example output can be broken down into the following steps:
- "PSEUE": Pick up shipment 3 and unload it into cell $(2,1)$.
- "NWPUS": Move to the entrance, pick up shipment 1 and unload it into $(0,1)$.
- "PEUS": Pick up shipment 2 and unload it into $(1,1)$.
- "WPEUE": Pick up shipment 4 and unload it into $(2,0)$.
- "WLSUE": Load shipment 1 from $(0,1)$, then unload it into $(1,0)$.
- "PUS": Pick up shipment 5 and unload it into $(0,1)$.
- "LED": Load shipment 1 from $(1,0)$, move to the entrance and drop it off.
- "ELSWD": Load shipment 2 from $(1,1)$ and drop it off.
- "ESLENWD": Load shipment 3 from $(2,1)$ and drop it off.
- "ELEWD": Load shipment 4 from $(2,0)$ and drop it off.
- "LSD": Load shipment 5 from $(0,1)$ and drop it off.

### Scoring
Your score for each test case is $(S+2)/(R+C-1) - 2\cdot R\cdot C + 20$, where $S$ is the length of your output string. Your score for each test file is the average of your scores for the individual test cases. Your score for the problem is the sum of your scores for all test files.

For the sample output, the score would be $(50+2)/(2+3-1) - 2\cdot2\cdot3 + 20 = 21$.

### Test Generation Process
There are twenty test files. During the contest, the displayed score will account for exactly two test files, i.e. your score reflects your submission's performance on 10% (1/10) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over the other eighteen test files.

The tests are generated using the following pseudocode. Assume that `random_int(x, y)` returns a uniformly randomly chosen integer between $x$ and $y$ inclusive and `random_shuffle(list)` replaces `list` by its uniformly randomly chosen permutation.
```
# 5 test cases in every file
T = 5
print(T)
for i in 1...T:
    R = random_int(6, 20)
    C = random_int(6, 20)
    print(R, C)
    # permute shipments numbered 1 through R*C-1
    shipments = [1, 2, ..., R*C-1]
    while True:
        random_shuffle(shipments)
        # do not allow 1 to be last shipment
        if shipments[R*C-1] != 1:
            break
    # print space-separated integers
    print(shipments[1], ..., shipments[R*C-1])
```

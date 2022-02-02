---
{"category_name":"challenge","problem_code":"CUBVIRUS","problem_name":"(Challenge) Cubical Virus","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"24-11-2019","tags":{"0":"alex_2oo8"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CUBVIRUS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/CUBVIRUS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/CUBVIRUS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/CUBVIRUS.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/CUBVIRUS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/CUBVIRUS.pdf) as well.

Chef is working on a small project ― he is building a cyberorganism. In his current design, the cyberorganism is an $N \times N \times N$ cube consisting of $N^3$ cells. Let's denote the cells by $(x, y, z)$, where $1 \le x, y, z \le N$.

Chef is currently working on the cyberorganism's self-defense mechanism against viruses. So far, he has figured out that viruses behave in the following way:
- When the cyberorganism is infected by a virus, some of its cells immediately become infected, while the remaining ones stay healthy (so far).
- Afterwards, the virus spreads itself. Whenever there is an infected cell $(x, y, z)$, the cells $(x + 1, y, z)$, $(x, y + 1, z)$ and $(x, y, z + 1)$ become infected as well (if they exist, i.e. the infection does not propagate outside the cyberorganism).
- The virus continues spreading itself until there are no more cells that can be infected this way.

Chef noticed that it is possible for the cyberorganism to reorganise itself right after the initial infection (before the virus starts spreading). The cyberorganism can use this opportunity to make itself less vulnerable to the virus (i.e. minimise the number of infected cells after the virus finishes spreading).

The cyberorganism can reorganise itself by changing the order of the rows, columns and layers of its cells. In other words, it can choose three permutations $P, Q, R$ of the integers $1$ through $N$ (each permutation can be chosen independently from the other two) and reorganise itself in such a way that for each valid $x, y, z$, the cell $(P_x, Q_y, R_z)$ before the reorganisation becomes the cell $(x, y, z)$ afterwards. If this cell was infected before the reorganisation, then it remains infected afterwards, and if it was healthy, it remains healthy afterwards ― only the coordinates of the infected and healthy cells change.

Chef has struggled for some time with an efficient self-defense mechanism and now, he has decided to ask for your help. You are given the coordinates of the cells that are infected initially. Determine how to reorganise the cyberorganism in order to minimise the number of cells that are infected after the virus finishes spreading.

### Input
- The first line of the input contains a single integer $N$.
- $N^2$ lines follow, where each block of $N$ lines describes a layer of the cube. Each of these lines contains a string with length $N$. For each valid $x, y, z$, the $x$-th character on the $(z-1)N+y$-th line is '1' if the cell $(x, y, z)$ is initially infected or '0' if this cell is initially healthy.

### Output
Print three lines.
- The first line should contain $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- The second line should contain $N$ space-separated integers $Q_1, Q_2, \ldots, Q_N$.
- Finally, the third line should contain $N$ space-separated integers $R_1, R_2, \ldots, R_N$.

### Constraints
- $3 \le N \le 100$
- all strings on the input contain only characters '0' and '1'
- initially, there is at least one healthy cell

### Scoring
In each test case (and therefore each test file), let $C$ be the number of initially infected cells and $K$ be the number of healthy cells after the virus stops spreading. If $K = 0$, your submission will receive the Wrong Answer verdict. Otherwise, your score for this test case is equal to $K \cdot \left(\frac{C}{N^3}\right)^{1.5}$. The score of a submission is equal to the sum of its scores over all test cases. The goal is to maximise the score of your submission.

There are 20 test files. During the contest, the displayed score will account for exactly four test files (numbered 2, 7, 12 and 17, see the Test Generation section), i.e. your score reflects your submission's performance on 20% (4 / 20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 16 test files.

### Example Input
```
3
011
100
010
011
010
100
000
000
010
```

### Example Output
```
1 3 2
1 2 3
3 2 1
```

### Explanation
After reorganising, the state of the cyberorganism is (using the same format as on the input, with an extra line between each two blocks of $N$ lines)
```
000
000
001

011
001
100

011
100
001
```
 

After the virus spreads, the state of the cyberorganism becomes
```
000
000
001

011
011
111

011
111
111
```

There are $9$ infected cells in the initial state and $11$ healthy cells in the final state, so the score of this output is $11 \cdot \left(\frac{9}{3^3}\right)^{1.5} \approx 2.117$.

### Test generation
- $N = 100$ in all test cases (except for the example).
- There are 20 test cases (numbered $0$ through $19$). In all test cases, the strings describing the initial state are generated independently and randomly.
- For each valid $k$, each cell in the $k$-th test case is initially infected with probability $P$ or healthy with probability $1-P$, where $P = 0.8^{k + 3}$ is fixed.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
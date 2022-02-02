---
{"category_name":"easy","problem_code":"CHEFK1","problem_name":"Chef Designed a Network","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 3\r\n5 6\r\n3 3","output":"2\r\n2\r\n2","explanation":"**Example case 1:** The optimal configuration (and the only configuration) of computers is to connect computers $1$ and $2$, connect computer $1$ to itself and computer $2$ to itself. Then, the consumption factor of each computer is $2$ because it is directly connected to itself and the other computer.\r\n\r\n**Example case 3:** Here, the cables can connect pairs of computers $(1, 2)$, $(1, 3)$ and $(2, 3)$. The consumption factor of each computer is $2$. There is a configuration with consumption factor $1$, where each computer is connected to itself, but all the computers are not connected, so this network configuration is invalid.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin5","problem_tester":null,"date_added":"16-08-2019","tags":{"0":"admin5","1":"anand20","2":"constructive","3":"graphs","4":"math","5":"sept19"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFK1","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFK1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/CHEFK1.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/CHEFK1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/CHEFK1.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/CHEFK1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/CHEFK1.pdf) as well.

Chef is a network engineer at CodeChef. Currently, he has to design a network that connects $N$ computers (numbered $1$ through $N$).

The network should consist of these $N$ computers and exactly $M$ cables. Usually, a cable needs to connect two different computers, but Chef is okay with connecting computers to themselves too. Therefore, let's describe a cable by the pair of computers $(u, v)$ it connects, where $1 \le u \le v \le N$. However, for each valid pair of computers $(u, v)$, there must be at most one cable that directly connects this pair of computers.

Let's define the *data consumption factor* of a computer as the number of computers which are directly connected to it. In particular, if a computer $v$ is directly connected to itself (by a cable $(v, v)$), it is only counted as connected to itself once. The data consumption factor of the whole network is the maximum of data consumption factors of all computers.

In the resulting network, each computer needs to be connected (directly or indirectly) to all other computers, so that they could communicate with each other.

Determine whether it is possible to design such a network. If it is possible, find the minimum possible data consumption factor of the resulting network.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing one integer ― the minimum data consumption factor or $-1$ if Chef cannot design a required network.

### Constraints 
- $1 \le T \le 5 \cdot 10^5$
- $1 \le N \le 10^6$
- $0 \le M \le 10^{15}$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le N \le 10$
- $0 \le M \le 10^3$

**Subtask #2 (10 points):** $1 \le T \le 10^2$

**Subtask #3 (10 points):** $1 \le T \le 10^3$

**Subtask #4 (70 points):** original constraints

### Example Input
```
3
2 3
5 6
3 3
```

### Example Output
```
2
2
2
```

### Explanation
**Example case 1:** The optimal configuration (and the only configuration) of computers is to connect computers $1$ and $2$, connect computer $1$ to itself and computer $2$ to itself. Then, the consumption factor of each computer is $2$ because it is directly connected to itself and the other computer.

**Example case 3:** Here, the cables can connect pairs of computers $(1, 2)$, $(1, 3)$ and $(2, 3)$. The consumption factor of each computer is $2$. There is a configuration with consumption factor $1$, where each computer is connected to itself, but all the computers are not connected, so this network configuration is invalid.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
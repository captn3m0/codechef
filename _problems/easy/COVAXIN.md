---
{"category_name":"easy","problem_code":"COVAXIN","problem_name":"Covaxin vs Covishield","problemComponents":{"constraints":"- $1 \\leq I \\leq 5 \\cdot 10^5$\n- $1 \\leq X,A_1,B_1,C_1,D_1 \\leq 10^{18}$\n- $1 \\leq P,Q,R,S,M \\leq 10^{18}$\n- $1 \\leq T \\leq 10^9$","constraintsState":true,"subtasks":"**Subtask #1 (10 points):** \n- $1 \\leq I \\leq 10^3$\n- $1 \\leq X \\leq 10^9$\n- Time limit: $1$ sec \n\n**Subtask #2 (30 points):** \n- $1 \\leq I \\leq 10^3$\n- $1 \\leq X \\leq 10^{15}$\n- $10^9 \\leq A_1 \\leq 10^{18}$\n- $10^9 \\leq B_1 \\leq 10^{18}$\n- $10^9 \\leq P \\leq 10^{18}$\n- $10^9 \\leq Q \\leq 10^{18}$\n- Time limit: $1$ sec \n\n**Subtask #3 (60 points):** \n- Original constraints\n- Time limit: $3$ sec \n","subtasksState":true,"inputFormat":"- First line contains of input contains an integer $I$ denoting the number of queries.\n- Second line of input contains five integers $X, A_1, B_1, C_1, D_1$.\n- Third line of input contains six integers $P, Q, R, S, T, M$.","inputFormatState":true,"outputFormat":"For each query output the maximum quantity of vaccines the black marketeer can buy.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n20 2 3 4 1\n3 7 8 4 11 20\n","output":"4\n1\n2\n","explanation":"\n**Test case $1$:** \n- For the first query, $[a, b, c, d] = [A_1, B_1, C_1, D_1] = [2, 3, 4, 1]$. It is optimal to buy $2$ doses of Covaxin $(2+5=7)$ and $2$ doses of Covishield $(4+5=9)$. So the total money spent is $7+9=16$ and now the black marketeer cannot buy any more doses. So the answer is 4.\n\n- For the second query, $[a, b, c, d] = [A_2, B_2, C_2, D_2] = [(2 + 11\\cdot 4)\\bmod 20 + 3, (3 + 11\\cdot 4) \\bmod 20 + 7, (4 + 11\\cdot 4) \\bmod 20 + 8, (1 + 11\\cdot 4) \\bmod 20 + 4]=[9, 14, 16, 9]$. \n\n- For the third and the last query, $[a, b, c, d] = [A_3, B_3, C_3, D_3] = [3, 12, 15, 4]$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"utkarsh_adm","problem_tester":"","date_added":"31-08-2021","tags":{"0":"binary","1":"easy","2":"sept21","3":"utkarsh_adm"},"problem_difficulty_level":"Unavailable","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/COVAXIN","time":{"view_start_date":1631525400,"submit_start_date":1631525400,"visible_start_date":1631525400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COVAXIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/SEPT21/bengali/COVAXIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT21/mandarin/COVAXIN.pdf), [Russian](https://www.codechef.com/download/translated/SEPT21/russian/COVAXIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT21/vietnamese/COVAXIN.pdf) as well.

There are two types of vaccines available: Covaxin and Covishield.

A black marketeer has $X$ coins and wants to buy as many vaccines as possible. Due to the black marketing concerns, government has enforced the following policy:

- $i^{th}$ dose of Covaxin costs $a + (i - 1)\cdot b$ coins for every $i \geq 1$. 

- $i^{th}$ dose of Covishield costs $c + (i - 1)\cdot d$ coins for every $i \geq 1$.

The values of the four parameters $a, b, c$ and $d$, however isn't constant and might vary from query to query. In general the value of these four parameters for $i^{th}$ query will be $A_i, B_i, C_i$ and $D_i$ respectively. 
Let $ans_i$ be the maximum total quantity of vaccines the black marketeer can buy corresponding to the $i^{th}$ query. For each query, you have to find the value of $ans_i$. 
 
You will be given integers $A_1, B_1, C_1, D_1, P, Q, R, S, T$ and $M$ which will define the queries to be followed. 

For $i \geq 1$ and $i \leq I - 1$:
- $A_{i+1} = (A_i + ans_i\cdot T) \bmod M + P$
- $B_{i+1} = (B_i + ans_i\cdot T) \bmod M + Q$ 
- $C_{i+1} = (C_i + ans_i\cdot T) \bmod M + R$ 
- $D_{i+1} = (D_i + ans_i\cdot T) \bmod M + S$ .

**Note:** Since the output is large, prefer using fast input-output methods.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"easy","problem_code":"DLTNODE","problem_name":"Sardar and GCD","problemComponents":{"constraints":"- $1 \\leq T \\leq 1000$\n- $2 \\leq N \\leq 10^5$\n- $1 \\leq A_i \\leq 10^9$\n- Sum of $N$ over all test cases will not exceed $5 \\cdot 10^5$.\n- It is guaranteed that the given roads connect every business.","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains an integer $T$, denoting the total number of test cases. The description of $T$ test cases follows.\n- The first line of each test case contains an integer $N$, denoting the number of businesses Ramadhir owns.\n- Each of the next $N-1$ lines contains $2$ integers $a$ and $b$, denoting a road between businesses $a$ and $b$.\n- Finally, the last line of each test case contains $N$ space-separated positive integers $A_1, A_2, \\ldots, A_N$, where $A_i$ is the value of the $i$-th business.","inputFormatState":true,"outputFormat":"- For each test case, output a single line containing one integer - the maximum possible damage that Sardar Khan can deal.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"1\n5\n1 2\n1 3\n3 4\n3 5\n4 6 8 12 15","output":29,"explanation":"* If business $1$ is bombed, the remaining connected components are $\\{(2), (3, 4, 5)\\}$. This gives a damage of $\\gcd(A_2) + \\gcd(A_3, A_4, A_5) = 6 + 1 = 7$.\n* If business $2$ is bombed, the remaining connected components are $\\{(1, 3, 4, 5)\\}$. This gives a damage of $\\gcd(A_1, A_3, A_4, A_5) = 1$.\n* If business $3$ is bombed, the remaining connected components are $\\{(1, 2), (4), (5)\\}$. This gives a damage of $\\gcd(A_1, A_2) + \\gcd(A_4) + \\gcd(A_5) = 2 + 12 + 15 = 29$.\n* If business $4$ is bombed, the remaining connected components are $\\{(1, 2, 3, 5)\\}$. This gives a damage of $\\gcd(A_1, A_2, A_3, A_5) = 1$.\n* If business $5$ is bombed, the remaining connected components are $\\{(1, 2, 3, 4)\\}$. This gives a damage of $\\gcd(A_1, A_2, A_3, A_4) = 2$.\n\nClearly, bombing business $3$ gives the maximum possible damage, that being 29.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Z3oii11TGJU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dhananjay_777","problem_tester":"","date_added":"24-09-2021","tags":{"0":"csns2021","1":"depth","2":"dhananjay_777","3":"easy","4":"greatest","5":"pre","6":"prefix","7":"trees"},"problem_difficulty_level":"Unavailable","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/DLTNODE","time":{"view_start_date":1635960600,"submit_start_date":1635960600,"visible_start_date":1635960600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DLTNODE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Sardar Khan has finally decided to attack Ramadhir. He will be bombing one of Ramadhir's business in Wasseypur. Sardar Khan knows that in total Ramadhir has $N$ businesses (numbered $1$ to $N$) and that there are $N - 1$ roads connecting these businesses in such a way that all businesses are connected. Each business has a specific value that Sardar Khan knows. 

All of Ramadhir's businesses are interlinked to each other in a unique way. If Sardar Khan destroys one of his business, then along with that business all the roads emerging from that business also get destroyed in the process and the damage caused to Ramadhir will be equal to sum of the greatest common divisors of all the values of the businesses that are still connected to each other.
Refer to sample test cases for more explanation.

Sardar Khan obviously wants to maximize the damage he causes. Can you help him find the maximum amount of damage he can do?


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
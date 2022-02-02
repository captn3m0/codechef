---
{"category_name":"easy","problem_code":"CHEFHACK","problem_name":"End Of The World","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"khadarbasha","problem_tester":"anton_lunyov","date_added":"31-10-2012","tags":{"0":"dfs","1":"easy","2":"jan13","3":"khadarbasha","4":"sieve"},"editorial_url":"http://discuss.codechef.com/problems/CHEFHACK","time":{"view_start_date":1358247077,"submit_start_date":1358247077,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><b>Important!!! Human's are in Danger... It may be The End of the Universe!!!</b></p>
<p><b>Aliens</b> had stolen the important data about the <b>Birth of the Human beings</b> and they kept this data in their secured <b>Data Center</b>. With the help of these data along with the advanced technologies Aliens had initiated a project called <b>It's The End</b> to get rid of the human beings and occupy the Earth.</p>
<p>On the other side, <b>Chef Po</b> is a good and very well-known <b>Hacker</b>. He is a great human lover, so he decided to get the data back from the Aliens by hacking their Data Center.</p>
<p>The Aliens Data Center contains various servers arranged in <b>N</b> rows and <b>N</b> columns and the Master Server will be at the last row and the last column of the Data Center. Denote the server at the intersection of the <b>i</b>-th row and the <b>j</b>-th column of the Data Center as <b>Server[i][j]</b> (<b>1</b> &le; <b>i</b>, <b>j</b> &le; <b>N</b>). So in this notation Master Server is <b>Server[N][N]</b>. Two servers are connected to each other if they are located either at the same row and consecutive columns or at the same column and consecutive rows. In other words, <b>Server[i][j]</b> and <b>Server[i-1][j]</b> are connected to each other for all <b>i</b> and <b>j</b> such that <b>2</b> &le; <b>i</b> &le; <b>N</b> and <b>1</b> &le; <b>j</b> &le; <b>N</b>. Also <b>Server[i][j]</b> and <b>Server[i][j-1]</b> are connected to each other for all <b>i</b> and <b>j</b> such that <b>1</b> &le; <b>i</b> &le; <b>N</b> and <b>2</b> &le; <b>j</b> &le; <b>N</b>.</p>
<p>Aliens had divided the <b>Data File</b> with the data about the Birth of the Human beings into <b>N * N</b> parts denoted as <b>F[i][j]</b> (<b>1</b> &le; <b>i</b>, <b>j</b> &le; <b>N</b>) and placed the part <b>F[i][j]</b> at the <b>Server[i][j]</b>. Each server has a password which is some non-negative integer. Chef Po needs to crack all the servers in order to get all parts of the <b>Data File</b>.</p>
<p>Aliens are really strange beings so they single out three types of passwords:</p>
<ul>
<li><b>Prime Password</b>, which is the prime number. The list of prime numbers starts as <b>2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, ...</b></li>
<li><b>Even Password</b>, which is the even non-prime number. This list starts as <b>0, 4, 6, 8, 10, 12, 14, ...</b> Note, that we exclude <b>2</b> since it is a prime.</li>
<li><b>Odd Password</b>, which is the odd non-prime number. This list starts as <b>1, 9, 15, 21, 25, 27, 33, 35, 39, 45, 49, ...</b> So it is the list of all odd positive numbers where primes are excluded.</li>
</ul>
<p>For simplicity we call server secured by the Even Password as Even Server. Similarly we define notion of Odd Server and Prime Server.</p>
<p>Each Odd or Even server has a friendly screen with the color indicator. Assume that you enter the password trying to guess the actual password at this server. Then indicator will become green if you enter the number which is smaller than the actual password, it will become red if your number is greater than the actual password or you will get the access to the server (and, thus, to the needed part of the Data File) if the password is correct.</p>
<p>On the other hand, each Prime Server has no such screen and the only way to crack it is to try all prime numbers until you find out the correct password. So our Chef simply iterate over the list of primes in increasing order and try them until he finds the correct password.</p>
<p>Probably most of you think that to crack servers with friendly screen Chef Po will use binary search. But he is quite weird Hacker and doesn't know this concept. To crack server with the friendly screen he will use the following strategy. He will try all even numbers starting from 0 (even number 2) until he either finds the correct password or the indicator becomes red which automatically would mean that the password is odd and equals to the <b>K-1</b> where <b>K</b> is the even number that was entered at last. So he enters <b>K-1</b> in the latter case and get the access to the server.</p>
<p>Let's consider some examples.</p>
<ul>
<li>Let the password be <b>4</b>. It is an Even Password so Chef will see the friendly screen which means for him that the server is either Even or Odd. Hence he will try passwords in the order <b>0, 2, 4</b> making 2 unsuccessful tries.</li>
<li>Let the password be <b>9</b>. It is an Odd Password so again Chef will see the friendly screen which means for him that the server is either Even Server or Odd Server. Hence he will try passwords in the order <b>0, 2, 4, 6, 8, 10, 9</b> making 6 unsuccessful tries. Note that after he enters <b>8</b> the indicator becomes green indicating that the password is greater than <b>8</b>, on the other hand, after he enters <b>10</b> the indicator becomes red indicating that the password is less than <b>10</b>. Since the only integer number greater than <b>8</b> and less than <b>10</b> is <b>9</b> he will enter it at the last step getting the access to the server.</li>
<li>Finally, let the password be <b>11</b>. It is a Prime Password so Chef will not see the friendly screen which means for him that the server is Prime Server. Hence he will try passwords in the order <b>2, 3, 5, 7, 11</b> making 4 unsuccessful tries.</li>
</ul>
<p>The Alien Data Center has very interesting vulnerability, that Chef has noticed by analyzing Alien's secured correspondence. If Chef crack some Even Server <b>S</b> then all Even Servers connected to <b>S</b> become cracked as well, and all Even Servers connected to these servers also become cracked and so on. More formally, the Even Server <b>S'</b> becomes cracked if it is connected with <b>S</b> via possibly other Even Servers. That is, there exists a sequence of Even Servers such that each two consecutive servers in this sequence are connected, the first server is <b>S</b> and the last server is <b>S'</b>. Chef calls this vulnerability as <b>"Grid Hacking Mechanism"</b>. The same is true for Odd Servers. By it is no longer true for Prime Servers. So each Prime Server should be cracked individually.</p>
<p>Now the final tactic for Chef is the following.</p>
<ul>
<li>He will consider the servers in row-major order.</li>
<li>That is, at first he consider servers of the first row in the order <b>Server[1][1]</b>, <b>Server[1][2]</b>, ..., <b>Server[1][N]</b>. Then he considers servers of the second row in the order <b>Server[2][1]</b>, <b>Server[2][2]</b>, ..., <b>Server[2][N]</b> and so on until he reaches the last server in the last row (which is the Master Server).</li>
<li>For each server he at first check whether it is already cracked by the <b>"Grid Hacking Mechanism"</b>.</li>
<li>If yes then he gathers the corresponding part of the Data File and move on.</li>
<li>Otherwise he checks for the friendly screen at this server and apply one of the cracking tactics described above.</li>
<li>That is, when he sees the friendly screen he will enter even numbers starting from zero until he finds the password in the way described above. After that he gathers the corresponding part of the Data File and also some other servers become cracked by the <b>"Grid Hacking Mechanism"</b>.</li>
<li>And when he doesn't see the screen he will enter prime numbers in increasing order until he finds the password. After that he again gathers the corresponding part of the Data File but no other servers become cracked since <b>"Grid Hacking Mechanism"</b> does not work for Prime Servers.</li>
<li>Finally he will reach the Master Server, crack it and gather the last part of the Data File.</li>
</ul>
<p>But the only way to recombine the original file is to use special Alien utility called <b>winripzar</b> on the Master Server. It also has the password. Chef Po is a great hacker, so he found out using his special skills that the password for <b>winripzar</b> equals to the number of unsuccessful tries used by him to crack all the servers in the Data Center.</p>
<p>After cracking all the servers and gathering all the parts of the Data File Chef became so happy that forgot the number of unsuccessful tries he made during this cracking marathon. But he noted down passwords for all the servers and now asks you for help. Calculate the number of unsuccessful tries Chef did during cracking of all the servers and let him save the Earth!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b>. Each of the following <b>N</b> lines contains <b>N</b> space separated integers. The <b>j</b>-th number at the <b>i</b>-th line denotes the password at the <b>Server[i][j]</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of unsuccessful tries used to crack all the servers in the Data Center.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>8</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>350</b></li>
<li><b>0</b> &le; <b>each password</b> &lt; <b>10<sup>7</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
2 6 4
4 8 9
7 9 4
2
8 4
15 4

<b>Output:</b>
20
13
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>The type of each server can be found in the following table.</p>
<p>
<table border="1">
<tbody>
<tr>
<td>Prime</td>
<td>Even</td>
<td>Even</td>
</tr>
<tr>
<td>Even</td>
<td>Even</td>
<td>Odd</td>
</tr>
<tr>
<td>Prime</td>
<td>Odd</td>
<td>Even</td>
</tr>
</tbody>
</table>
</p>
<p>Now the process of cracking of servers by the Chef will be the following.</p>
<ul>
<li>At first Chef cracks the <b>Server[1][1]</b> secured by the password <b>2</b> which is a prime number. Hence Chef does not see the friendly screen and tries prime numbers in increasing order. Since <b>2</b> is the smallest prime number he cracks this server without unsuccessful tries. Since it is a Prime Server than <b>"Grid Hacking Mechanism"</b> does not work here.</li>
<li>Next Chef cracks the <b>Server[1][2]</b> secured by the password <b>6</b> which is an Even Password (even non-prime number). Hence Chef sees the friendly screen and tries even numbers in order <b>0, 2, 4, 6</b> making 3 unsuccessful tries to crack this server. Since it is an Even Server than by <b>"Grid Hacking Mechanism"</b> the following 3 servers also become cracked: <b>Server[1][3]</b>, <b>Server[2][1]</b> and <b>Server[2][2]</b> since they all Even Servers and connected to the <b>Server[1][2]</b> via other Even Servers (see the above table). Note, that Even <b>Server[3][3]</b> does not become cracked since it is not connected to <b>Server[1][2]</b> via other Even Servers.</li>
<li>Next Chef consider the <b>Server[1][3]</b>. As was mentioned above it was already cracked so Chef simply gatheres the corresponding part of the Data File without entering any numbers.</li>
<li>The same is true for the next two servers <b>Server[2][1]</b> and <b>Server[2][2]</b>.</li>
<li>But <b>Server[2][3]</b> is secured by the odd non-prime number <b>9</b> so it is an Odd Server and Chef tries numbers in order <b>0, 2, 4, 6, 8, 10, 9</b> making 6 unsuccessful tries to crack it. Applying <b>"Grid Hacking Mechanism"</b> for this server has no effect since it is not connected to any other Odd Server.</li>
<li>The <b>Server[3][1]</b> is Prime and Chef tries numbers in order <b>2, 3, 5, 7</b> making 3 unsuccessful tries to crack it.</li>
<li>The <b>Server[3][2]</b> is Odd and was not cracked earlier. Hence Chef tries numbers in order <b>0, 2, 4, 6, 8, 10, 9</b> making 6 unsuccessful tries to crack it.</li>
<li>The <b>Server[3][3]</b> is Even and was not cracked earlier. Hence Chef tries numbers in order <b>0, 2, 4</b> making 2 unsuccessful tries to crack it.</li>
</ul>
<p>Summarizing we see that Chef made 20 unsuccessful tries in all. Their distribution among servers can be found in the following table.</p>
<p>
<table border="1">
<tbody>
<tr>
<td>0</td>
<td>3</td>
<td>0</td>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>6</td>
</tr>
<tr>
<td>3</td>
<td>6</td>
<td>2</td>
</tr>
</tbody>
</table>
</p>
<p><b>Example case 2.</b></p>
<p>The type of each server can be found in the following table.</p>
<p>
<table border="1">
<tbody>
<tr>
<td>Even</td>
<td>Even</td>
</tr>
<tr>
<td>Odd</td>
<td>Even</td>
</tr>
</tbody>
</table>
</p>
<p>Now the process of cracking of servers by the Chef will be the following.</p>
<ul>
<li>The <b>Server[1][1]</b> is Even and Chef tries numbers in order <b>0, 2, 4, 6, 8</b> making 4 unsuccessful tries to crack it.</li>
<li>The <b>Server[1][2]</b> is Even and already cracked by the <b>"Grid Hacking Mechanism"</b>.</li>
<li>The <b>Server[2][1]</b> is Odd and Chef tries numbers in order <b>0, 2, 4, 6, 8, 10, 12, 14, 16, 15</b> making 9 unsuccessful tries to crack it.</li>
<li>The <b>Server[2][2]</b> is Even and already cracked by the <b>"Grid Hacking Mechanism"</b>.</li>
<p>Thus, Chefs made 13 unsuccessful tries and their distribution among servers can be found in the following table.</p></ul>
<p>
<table border="1">
<tbody>
<tr>
<td>4</td>
<td>0</td>
</tr>
<tr>
<td>9</td>
<td>0</td>
</tr>
</tbody>
</table>
</p>
<h3>Warning!</h3>
<p>The input file size could reach almost 8MB so be sure you are using fast I/O method.</p>

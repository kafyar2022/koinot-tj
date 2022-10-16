<?php

namespace Database\Seeders;

use App\Models\Contribution;
use Illuminate\Database\Seeder;

class ContributionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contributions = array(
      array('id' => '7', 'locale' => 'ru', 'title' => 'Забота о здоровье наших Граждан', 'slug' => 'zabota-o-zdorove-nashih-grazhdan', 'content' => '<p><span style="color: black;">Пандемия коронавируса в Таджикистане стала не только испытанием для всех людей, но и периодом всеобщей солидарности.&nbsp;</span>Период самоизоляции и карантина стал вызовом для фармацевтической индустрии.&nbsp;Интернет-аптека «<span style="color: black;">Salomat</span><span style="color: black;">» работала в активном режиме для обеспечения жителей республики доступными лекарственными средствами, которые доставлялись, не выходя из дома.&nbsp;В&nbsp;</span><span style="color: black;">Интернет-аптеке «</span><span style="color: black;">Salomat</span><span style="color: black;">» работают высококвалифицированные сотрудники, которые со всей ответственностью подходили и подходят к своей работе, соблюдая все меры безопасности и своевременно доставляя необходимые лекарственные средства.</span></p>', 'created_at' => '2022-10-03 09:05:06', 'updated_at' => '2022-10-03 09:23:13', 'date' => '2020-04-01T00:00:06'),
      array('id' => '8', 'locale' => 'ru', 'title' => 'Читатель ушёл в онлайн!', 'slug' => 'chitatel-ushel-v-onlayn', 'content' => '<p><span style="color: black;">Ж</span>изнь всего мира в 2020 г. изменил новый коронавирус COVID-19.</p><p>Ограничительные мероприятия введены в разных странах, в различных отраслях.&nbsp;</p><p>Первыми «под раздачу» попали учреждения, работа которых связана с массовым посещением их гражданами. Не стали исключением и библиотеки. </p><p><span style="color: black;">Эффективная «удалёнка» стала для нас не единичным явлением, не трендом, а новой реальностью.</span> Наш проект «Хирад» содержит электронные версии специализированных книг по менеджменту, маркетингу, финансам, произведения таджикских авторов. Вся литература преподносится читателю исключительно на таджикском языке.</p><p><br></p><p><span style="color: black;">Пользователи имеют доступ к переведённым на таджикский язык книгам ведущих мировых экспертов в области бизнеса, публикуемым&nbsp;всемирно известными издательствами.</span></p><p><span style="color: black;"><br></span></p><p><span style="color: black;">Несмотря на карантин, творческий подход проекта «Хирад» помогает доставлять издания в руки читателей.</span></p>', 'created_at' => '2022-10-03 09:46:14', 'updated_at' => '2022-10-03 09:46:14', 'date' => '2020-04-01T14:42'),
      array('id' => '10', 'locale' => 'ru', 'title' => 'Генеральный спонсор Федерации Шахмат Таджикистана', 'slug' => 'generalnyy-sponsor-federacii-shahmat-tadzhikistana', 'content' => '<p>Продвигая принципы корпоративной социальной ответственности, мы фокусируемся на повышении уровня жизни людей в нашей стране. Активное участие и поддержка проектов, пропагандирующих здоровый образ жизни, интеллектуальную деятельность – основополагающая концепция спонсорской деятельности <b>«КОИНОТИ НАВ»</b>.&nbsp;Сделать мир лучше и принести максимальную пользу обществу – основной постулат философии нашей команды.&nbsp;</p><p><br></p><p>ЗАО "КОИНОТИ НАВ" является генеральным спонсором федерации шахмат Таджикистана. Как отметил Вице-Президент федерации шахмат, в последние годы в нашей стране предпринимаются значительные шаги для развития этого вида спорта в стране. Ещё в августе 2017 года Основатель мира и национального единства – Лидер нации, Президент Республики Таджикистан уважаемый Эмомали Рахмон подчеркнул необходимость введения уроков шахмат в школах страны. После этого в республике были изданы учебники на таджикском языке под названием «Основы шахмат», которые содержат правила и набор компонентов игры.<br></p><p><b><br></b></p><p><b>Мы продолжим активно развивать этот вид спорта в нашей стране!</b><br></p><p>&nbsp;</p><p>«В шахматах можно лишь тогда стать большим мастером, когда осознаешь собственные ошибки и слабости. Точно как в жизни.»&nbsp; Александр Алехин</p>', 'created_at' => '2022-10-13 11:45:15', 'updated_at' => '2022-10-15 10:43:44', 'date' => '2017-10-13T17:44'),
      array('id' => '11', 'locale' => 'ru', 'title' => 'ЗАО "КОИНОТИ НАВ" партнер Федерации Футбола Таджикистана', 'slug' => 'sponsor-federacii-futbola-tadzhikistana', 'content' => '<p>Мы рады, что "КОИНОТИ НАВ"&nbsp; один из постоянных партнеров ФФТ. Мы уверены в долгосрочном сотрудничестве, цель которого – увеличить армию болельщиков в спорте №1. Мы привлекаем молодежь и популяризируем здоровый устойчивый образ жизни – эти два аспекта очень важны для нас.</p><p><br></p><p>Мы гордимся тем, что можем внести свой вклад в развитие футбола в Таджикистане!</p>', 'created_at' => '2022-10-13 12:56:15', 'updated_at' => '2022-10-15 10:32:40', 'date' => '2022-10-13T17:47'),
      array('id' => '12', 'locale' => 'ru', 'title' => '"ЕВАР" титульный спонсор ФЛТ', 'slug' => 'evar-titulnyy-sponsor-flt', 'content' => '<p><span style="color: rgb(37, 44, 51);">Титульным спонсором ФЛТ выступил душанбинский торговый комплекс «Ёвар», в которых для всех болельщиков в ближайшее время будут подготовлены уникальный сервис и скидки, которыми они смогут воспользоваться.</span><br></p>', 'created_at' => '2022-10-15 10:27:24', 'updated_at' => '2022-10-15 10:43:07', 'date' => '2016-10-15T10:27:24'),
      array('id' => '13', 'locale' => 'ru', 'title' => 'Безвозмездная помощь Минздраву Республики Таджикистан', 'slug' => 'bezvozmezdnaya-pomoshch-minzdravu-respubliki-tadzhikistan', 'content' => '<p>Мы приняли проактивное участие в борьбе с болезнью, и чтобы поддержать общество в сложной ситуации и смягчить неблагоприятные последствия&nbsp;оказали посильную безвозмездную&nbsp;помощь Министерству здравоохранения и социальной защиты населения Республики Таджикистан. ЗАО "КОИНОТИ НАВ" безвозмездно передал&nbsp;медицинскую технику, лекарственные препараты, основные расходные материалы (иглы, шприцы, маски, перчатки и т.д.) для лечения пациентов с КОВИД-19.<br></p><p><br></p><p>Мы всячески помогаем снизить распространение вируса и его последствия.</p>', 'created_at' => '2022-10-15 10:57:13', 'updated_at' => '2022-10-15 10:57:51', 'date' => '2020-10-15T10:57:13')
    );

    foreach ($contributions as $contribution) {
      Contribution::create([
        'id' => $contribution['id'],
        'title' => $contribution['title'],
        'slug' => $contribution['slug'],
        'content' => $contribution['content'],
        'date' => $contribution['date'],
      ]);
    }
  }
}

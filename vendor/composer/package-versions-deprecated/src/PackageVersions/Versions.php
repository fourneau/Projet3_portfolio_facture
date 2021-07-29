<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.2.0@072c11c1dcfced4505e29a0487b06ea774c403f4',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'easycorp/easyadmin-bundle' => 'v3.4.3@fa4efb7440f2dfdf1cdfc3e14da6309af5b2486f',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'fakerphp/faker' => 'v1.15.0@89c6201c74db25fa759ff16e78a4d8f32547770e',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'jms/metadata' => '2.5.0@b5c52549807b2d855b3d7e36ec164c00eb547338',
  'knplabs/knp-snappy' => 'v1.2.1@7bac60fb729147b7ccd8532c07df3f52a4afa8a4',
  'knplabs/knp-snappy-bundle' => 'v1.8.0@0f81887b0379a2731b869289bf3d880f34dfd423',
  'laminas/laminas-code' => '4.4.2@54251ab2b16c41c6980387839496b235f5f6e10b',
  'monolog/monolog' => '2.3.2@71312564759a7db5b789296369c1a264efc43aad',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.2.12@abe64fee9fa2978c730c84d0d6df760f2d9ddba0',
  'symfony/cache' => 'v5.2.12@b59303192fb99c8b3d3abc0b5975c7512fe6d1f4',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.2.12@32f6be0d0c2e204ff35759f9ee81d4f5e83b7acb',
  'symfony/console' => 'v5.2.14@ffc2722adb0983451855c794c4bc7818d3c65fa2',
  'symfony/dependency-injection' => 'v5.2.12@2f0326ab0e142a3600b1b435cb3e852bc96264b6',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.2.12@0212d2d1e17a3e7403475b76e26fc1f0f1add04b',
  'symfony/dotenv' => 'v5.2.14@12888c9c46ac750ec5c1381db5bf3d534e7d70cb',
  'symfony/error-handler' => 'v5.2.12@7ca5fa510345f6b8def43b18c900852defaee362',
  'symfony/event-dispatcher' => 'v5.2.12@6a32cd803f8ff33d84b709de3978f44a62e42961',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => 'v5.2.12@d4367d36217dd395b10f61649a6bf2c1367140d8',
  'symfony/filesystem' => 'v5.2.12@ed397ef25365b3db9f215af4ed5b1ec8a5b10989',
  'symfony/finder' => 'v5.2.12@17f50e06018baec41551a71a15731287dbaab186',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v5.2.12@929811a7667aa5814f93a70974423870b14c05aa',
  'symfony/framework-bundle' => 'v5.2.12@4e9ca1c60dba3b5e261eadd3b427bc115914b72b',
  'symfony/http-client' => 'v5.2.12@1895ede860a198803395a67738104211508b5ddc',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.14@2a247de56fc8f5efdf1e098192128e8e509d370c',
  'symfony/http-kernel' => 'v5.2.14@2c3b9af1047c477c527504a3509ab59e4fae0689',
  'symfony/intl' => 'v5.2.12@23ae12a613eb77725c6ef6a15d37b0e9956c6a2a',
  'symfony/mailer' => 'v5.2.12@75ea7f9e54c1bc49b6d7e3d6b20422f85b7ea3e4',
  'symfony/mime' => 'v5.2.12@6ad63acd694b30e75fb2426b037e92859df73d6b',
  'symfony/monolog-bridge' => 'v5.2.12@2c3943d7c0100983f9c0a82807555273353e3539',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/notifier' => 'v5.2.12@08f557f018e080ea36d51b43a6552bf5396e9c83',
  'symfony/options-resolver' => 'v5.2.12@1935d2e5329aba28cbb9ef6cc5687d007619d96d',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/polyfill-uuid' => 'v1.23.0@9165effa2eb8a31bb3fa608df9d529920d21ddd9',
  'symfony/process' => 'v5.2.12@d16634ee55b895bd85ec714dadc58e4428ecf030',
  'symfony/property-access' => 'v5.2.12@82c6db3e4066ebc1993c377ae71090d0c8f0552c',
  'symfony/property-info' => 'v5.2.12@f9dd1886f47db8ea494d97a4b8bfa494094f53f1',
  'symfony/proxy-manager-bridge' => 'v5.2.12@76e61f33f6a34a340bf6e02211214f466e8e1dba',
  'symfony/routing' => 'v5.2.12@983a19067308962592755f57d97ca1d1f1edd37b',
  'symfony/security-bundle' => 'v5.2.12@bc36546f36355d7c0b56b23c44786b36904f838d',
  'symfony/security-core' => 'v5.2.14@4ce2b1e532fb3bb591ad4efa8cc43afc9242a247',
  'symfony/security-csrf' => 'v5.2.12@f0af6689451582e55f6b3439362e72e536e916e4',
  'symfony/security-guard' => 'v5.2.12@9edddb0b4c97eb923ba9910050be80f539933c3b',
  'symfony/security-http' => 'v5.2.12@8d6fb4fb1bb0d4a11b30de85cbf77914c71175bc',
  'symfony/serializer' => 'v5.2.12@3c3afcc285c01c486d1c5504e7895026580495c4',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.2.12@24744393b122b8309bbcc7965972ae51a29a602d',
  'symfony/string' => 'v5.2.11@ab6dc1c796bbceffbaf9ccbfb7a24feb641d6ee7',
  'symfony/translation' => 'v5.2.12@7b4ef368b25bbb758a7bd5fe20349433e84220ed',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.2.12@243a7c6416fea3b91391f09831d8d04b2e42c0b1',
  'symfony/twig-bundle' => 'v5.2.12@6f2aa369c4b7da19b3c864c48e35b26451c92e4e',
  'symfony/uid' => 'v5.2.11@3604ffeb285e2ad213113aadc891338dfa7e9ff7',
  'symfony/validator' => 'v5.2.14@a46ac85624ad3418d455bb8f4ce452014c28518c',
  'symfony/var-dumper' => 'v5.2.12@d5f42c357a6672d4e5960bba85e437850e9a7abb',
  'symfony/var-exporter' => 'v5.2.12@b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
  'symfony/web-link' => 'v5.2.12@3d1f4a0318314c63c363f5d49de15d54780b2079',
  'symfony/webpack-encore-bundle' => 'v1.12.0@9943a59f8551b7a8181e19a2b4efa60e5907c667',
  'symfony/yaml' => 'v5.2.14@ffe9c92e1a6c77c3ad5fc3a2ac16f0b8549dae10',
  'symfonycasts/reset-password-bundle' => 'v1.9.1@775e847613737f55cf06c6a7457f4bcf8ce258e5',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'vich/uploader-bundle' => '1.18.0@c5250c8d6a072960250ce5130e68a5693b3b48dd',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'amphp/amp' => 'v2.6.0@caa95edeb1ca1bf7532e9118ede4a3c3126408cc',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'amphp/parallel' => 'v1.4.0@2c1039bf7ca137eae4d954b14c09a7535d7d4e1c',
  'amphp/parallel-functions' => 'v1.0.0@af9795d51abfafc3676cbe7e17965479491abaad',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.1@b88c6aef75c0b22f6f021141dd2d5e7c5db4c124',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/sync' => 'v1.4.0@613047ac54c025aa800a9cde5b05c3add7327ed4',
  'composer/xdebug-handler' => '2.0.1@964adcdd3a28bf9ed5d9ac6450064e0d71ed7496',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'gitonomy/gitlib' => 'v1.2.3@d22f212b97fdb631ac73dfae65c194dc4cb0d227',
  'ondram/ci-detector' => '3.5.1@594e61252843b68998bddd48078c5058fe9028bd',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'pdepend/pdepend' => '2.10.0@1fd30f4352b630ad53fec3fd5e8b8ba760f85596',
  'phpmd/phpmd' => '2.10.2@1bc74db7cf834662d83abebae265be11bb2eec3a',
  'phpro/grumphp' => 'v1.4.0@d100d058fd767b310f090ffa6571f0af59d0465f',
  'phpstan/phpdoc-parser' => '0.4.14@cf4fc7d2aeca6910fba061901ffd7d107ccfdbcc',
  'phpstan/phpstan' => '0.12.93@7b7602f05d340ffa418c59299f8c053ac6c3e7ea',
  'phpstan/phpstan-doctrine' => '0.12.42@e3173175dcdaf808d5ca6408528dca669e4de19f',
  'phpstan/phpstan-symfony' => '0.12.41@4ae5cbe13a30ac1a377465a5d9dddfb1f1f5a0b3',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'squizlabs/php_codesniffer' => '3.6.0@ffced0d2c8fa8e6cdc4d695a743271fab6c38625',
  'symfony/browser-kit' => 'v5.2.12@ed7ebe262cef150742f5b61d48a94d37513c5758',
  'symfony/css-selector' => 'v5.2.12@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/debug-bundle' => 'v5.2.12@2cb76e25ca75afb0d52c1ba83d77cd4190ed5552',
  'symfony/dom-crawler' => 'v5.2.12@c983279c00f723eef8da2a4b1522296c82dc75da',
  'symfony/maker-bundle' => 'v1.33.0@f093d906c667cba7e3f74487d9e5e55aaf25a031',
  'symfony/phpunit-bridge' => 'v5.3.4@bc368b765a651424b19f5759953ce2873e7d448b',
  'symfony/web-profiler-bundle' => 'v5.2.13@380038080e46eb92b3a392de646fd32b632f1c77',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
